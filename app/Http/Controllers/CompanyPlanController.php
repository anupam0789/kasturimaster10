<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use App\Mail\ProcessEmail;
use Illuminate\Http\Request;
use App\Models\PlanEvent;
use App\Models\PlanEventGroup;
use App\Models\PlanToEvent;
use App\Models\Companymaster;
use Illuminate\Support\Facades\Validator;



#[\AllowDynamicProperties]
class CompamyPlanController extends Controller
{
    public function __construct()
    {
        // $this->PlanEventGroup = new  PlanEventGroup();
        // $this->PlanEvent = new  PlanEvent();
        // $this->PlanToEvent = new  PlanToEvent();
        $this->Companymaster = new  Companymaster();
    }

    public function index()
    {  
        $data = [];
        // ---------------------------- Event Group --------------------

        $plan_groups = PlanEventGroup::select('id', 'name', 'description','status')
                    ->where('status', 1)
                    ->orderBy('name','ASC')->get();

        $data['plan_groups'] = array();
        foreach($plan_groups as $key => $plan_group) {   
            $plan_events = PlanEvent::select('id', 'name', 'description', 'status', 'event')
                        ->where('groupId', $plan_group->id)
                        ->get();

            $data['plan_groups'][] = [
                'id' => $plan_group->id,
                'name' =>$plan_group->name,
                'description' => $plan_group->description,
                'status' => $plan_group->status,
                'event_data' => $plan_events
            ];
        }
        return view('plan.plan', $data);
    }

    public function create(Request $request) {
        $validator = Validator::make($request->all(), ['plan_type' => 'required']);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        $PlanToEvent = PlanToEvent::select('plan_id', 'event_id', 'value')->where('plan_id', $request->input('plan_type'))->get();
        $temp = [];
        $data['plan_event_data'] = array();

        $finalArray = array();
        foreach($PlanToEvent as $rec) {

            $plan_events = DB::table('plan_events')
                    ->join('plan_event_groups', 'plan_event_groups.id', '=', 'plan_events.groupId')
                    ->select('plan_events.id', 'plan_events.name', 'plan_events.groupId', 'plan_events.event', 'plan_event_groups.name as groupName')
                    ->where('plan_events.id', $rec->event_id)
                    ->get();
            foreach( $plan_events  as  $item ) {
               $temp['eventId'] = $item->id;
               $temp['eventTitle']= $item->name;
               $temp['event']= $item->event;
               if($rec->event_id == $item->id ) {
                $temp['eventValue']= ($rec->value != null)?$rec->value:'NULL';
               } 
               $temp['groupId']= $item->groupId;
               $temp['groupName']= $item->groupName;
            }
            array_push($finalArray, $temp);
        } 
        $params = [];
        $getData = json_encode($finalArray);
        $params['_CPlanData'] = $getData;
        $params['_CPlanId'] = $request->input('plan_type');
        $updateData = Companymaster::where('_CMid', 1)->update($params);
        return response()->json(['success' => 'plan has been selected successfully!']);
        return redirect()->route('company.plan.list');
      
    }

    public function list() {
        $data = [];
        $data['plan_data'] = [];
        $data['plan_groups'] = [];
        $plan_data = Companymaster::select('_CMid', '_CPlanData')->where('_CMid', 1)->first();
        $plan_groups = PlanEventGroup::select('id', 'name', 'description','status')->where('status', 1)->orderBy('name','ASC')->get();
        $data['plan_lists'] = array();
        $plan_data = json_decode($plan_data['_CPlanData']) ;
        $all_plan = [];
        foreach($plan_groups as $key => $plan_group) {
            foreach($plan_data as $plan) {                 
                if($plan->groupId === $plan_group->id){
                    $all_plan[]  = $plan;
                }
            }
            
            $plan_events = PlanEvent::select('id', 'name', 'description', 'status', 'event')->where('groupId', $plan_group->id)->get();
            $data['plan_lists'][] = [
                'id' => $plan_group->id,
                'name' =>$plan_group->name,
                'description' => $plan_group->description,
                'status' => $plan_group->status,
                'event_data' => $plan_events,
                'plan_data' => $all_plan,
            ];
            
        }    
        return view('plan.currentPlan', $data);
    }   
    
    public function update(Request $request) {
        $inputData = $request->all();
        $result = array_filter($inputData['company_plan'], function($subarray) {
            return isset($subarray['eventId']) && ($subarray['eventId']);
        });
        $finalArray = array();
        foreach($result as $rec) {

            $plan_events = DB::table('plan_events')
                    ->join('plan_event_groups', 'plan_event_groups.id', '=', 'plan_events.groupId')
                    ->select('plan_events.id', 'plan_events.name', 'plan_events.groupId', 'plan_events.event', 'plan_event_groups.name as groupName')
                    ->where('plan_events.id', $rec['eventId'])
                    ->get();
            foreach( $plan_events  as  $item ) {
               $temp['eventId'] = $item->id;
               $temp['eventTitle']= $item->name;
               $temp['event']= $item->event;
               if($rec['eventId'] == $item->id ) {
                $temp['eventValue']= ($rec['eventValue'] != null)?$rec['eventValue']:'NULL';
               } 
               $temp['groupId']= $item->groupId;
               $temp['groupName']= $item->groupName;
            }
            array_push($finalArray, $temp);
        }
        $filteredArray = json_encode(array_values($finalArray));
        // echo "<pre>"; print_r($filteredArray); die;
        $params['_CPlanData'] = $filteredArray;
        $updateData = Companymaster::where('_CMid', 1)->update($params);
        return redirect()->route('company.plan.show');
      
    }
}