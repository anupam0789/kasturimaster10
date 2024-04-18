<?php

namespace App\Http\Controllers\Admin;

use App\Models\Plan;
use App\Models\Company;
use App\Models\PlanEvent;
use App\Models\PlanToEvent;
use Illuminate\Http\Request;
use App\Helpers\ExcelHelper; 
use Illuminate\Http\Response;
use App\Models\PlanEventGroup;
use App\Exports\CompaniesExport; 
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;  

class CompanyController extends Controller
{
    public function __construct()
    {
        // $this->middleware('can:company list', ['only' => ['index', 'show']]);
        // $this->middleware('can:company create', ['only' => ['create', 'store']]);
        // $this->middleware('can:company edit', ['only' => ['edit', 'update']]);
        // $this->middleware('can:company delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $companiesQuery = Company::query();  
        if(isset($request->search)){  
            $data['PlanDetails'] = DB::table('mm_companymaster')
            ->leftJoin('plans', 'mm_companymaster._CPlanId', '=', 'plans.id')
            ->select('_CMid', '_CMcompanyName','_CMstatus','_CMmobile', '_CMemail', '_CMname','_CMcreatedOn', 'plans.id', 'plans.name', 'plans.price')
            ->orWhere('_CMcompanyName', 'LIKE', "%$request->searchName%")
            ->orWhere('plans.name', 'LIKE', "%$request->searchName%")
            ->orderBy('id','DESC') 
            ->paginate(10); 
        }else{
            $data['PlanDetails'] = DB::table('mm_companymaster')
            ->leftJoin('plans', 'mm_companymaster._CPlanId', '=', 'plans.id')
            ->select('_CMid', '_CMcompanyName','_CMstatus', '_CMmobile', '_CMemail', '_CMname','_CMcreatedOn', 'plans.id', 'plans.name', 'plans.price')
            ->orderBy('_CMid','DESC')
            ->paginate(10); 
        }
        $companies = $companiesQuery;
        
        return view('admin.company.index', compact('companies'),['data' => $data]);
    }

    public function create()
    {
        return view('admin.company.create');
    }

    public function store(Request $request)
    {
        Company::create($request->all());

        return redirect()->route('admin.company.index')->with('message', __('Company created successfully.'));
    }

    public function show(Company $company)
    {
        return view('admin.company.show', compact('company'));
    }

    public function companyPlanEdit(Request $request, $id)
    {

        $company = Company::where('_CMid',$id)->first();
        $planData  = json_decode($company->_CPlanData); 
        $plans = Plan::where('status',1)->get();  
        $planEventGroup  = PlanEventGroup::all();
        
        return view('admin.company.edit', compact('company','plans','planData','planEventGroup'));
    }

    public function list(Request $request) { 
        $data = [];
        $data['company_id'] = $request->id;
        $data['plan_data'] = [];
        $data['plan_groups'] = [];
        $plan_data = Company::select('_CMid', '_CPlanData')->where('_CMid', 1)->first();
        $plan_groups = PlanEventGroup::select('id', 'name', 'description','status')->where('status', 1)->orderBy('name','ASC')->get();
        $data['plan_lists'] = array();
        $plan_data = json_decode($plan_data['_CPlanData']) ;
       
        $all_plan = [];
        dd($plan_data); 
        foreach($plan_groups as $key => $plan_group) {
            foreach($plan_data as $plan) {                 
                if($plan->groupId === $plan_group->id){
                    $all_plan[]  = $plan;
                }
            }
            $data['plan_lists'][] = [
                'id' => $plan_group->id,
                'name' =>$plan_group->name,
                'description' => $plan_group->description,
                'status' => $plan_group->status,
                'event_data' => $plan_events,
                'plan_data' => $all_plan,
            ];
            
        }    
        return view('admin.company.currentPlan', $data);
    } 

    public function update(Request $request) {

        // print_r($request->id); die; 
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
        $updateData = Company::where('_CMid', $request->input('company_id'))->update($params);
        return redirect()->route('admin.company.index')->with('message', __('Company Plan updated successfully.'));
      
    }

    public function updateCompanyPlan(Request $request) { 
        DB::table('mm_companymaster')
            ->where('_CMid', $request->companyId)
            ->update(['_CPlanId' => $request->planid]);
        //Company::where('_CMid',$request->companyid)->update(['_CPlanId'=>$request->planid]); 
        $planToEvent = PlanToEvent::where('plan_id',$request->planid)->get(); 
        $finalArray = array();

        if($request->company_plan){

            $finalArray = $request->company_plan;

        }else{
            
            foreach($planToEvent as $rec) {
                
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
                    $temp['eventValue']= ($rec['value'] != null)?$rec['value']:'NULL';
                   }else{
                    $temp['eventValue'] =null;
                   } 
                   $temp['groupId']= $item->groupId;
                   $temp['groupName']= $item->groupName;
                }
                array_push($finalArray, $temp);
            }
        }
         
        DB::table('mm_companymaster')
            ->where('_CMid', $request->companyId)
            ->update(['_CPlanData' =>'']);
         //dd($finalArray);
        $filteredArray = json_encode(array_values($finalArray));
       
        // echo "<pre>"; print_r($filteredArray); die;
        //$params['_CPlanData'] = $filteredArray;
        
        //$updateData = Company::where('_CMid', $request->companyid)->update($params);
        DB::table('mm_companymaster')
            ->where('_CMid', $request->companyId)
            ->update(['_CPlanData' => $filteredArray]);
        echo 1;
        exit;
        return redirect()->route('admin.company.index')->with('message', __('Company Plan updated successfully.'));
      
    }

    public function planChange(Request $request) {

        $plan_id = $request->input('selected_value');
        $PlanToEvent = DB::table('plan_to_events')
        ->join('plan_events', 'plan_to_events.event_id', '=', 'plan_events.id')
        ->select('plan_id', 'event_id','plan_events.name','plan_events.id','plan_events.groupId')->where('plan_id', $plan_id)->get();
        $planGroups = PlanEventGroup::select('id', 'name')->where('status', 1)->orderBy('name','ASC')->get();
        $data = [];
        $data['PlanToEvent'] = $PlanToEvent;
        $data['planGroups'] = $planGroups;
        $response = [
            'status' => 200,
            'error' => true,
            'message' => 'Success',
            'data' => $data
            ];
            return response()->json(['success' =>  $response]);
      
    }
    public function destroy(Company $company)
    {
        $company->delete();

        return redirect()->route('admin.company.index')->with('message', __('Company deleted successfully.'));
    }
    public function updateCompanyPlanDetails(Request $request){
       
        DB::table('mm_companymaster')
            ->where('_CMid', $request->_CMid)
            ->update($request->toArray());
        
        echo 1;
        exit;

    }
    public function exportCompanies()
    {
        $companyPlanHeader =[
            "ID",
            "Company Name", 
            "Name",
            "Mobile",
            "Email",
            "Plan Name",
            "Status", 
            "Created Date", 
        ];

        $comapniesPlanData = DB::table('mm_companymaster')
            ->leftJoin('plans', 'mm_companymaster._CPlanId', '=', 'plans.id')
            ->select('_CMid','_CMcompanyName','_CMname', '_CMmobile', '_CMemail', 'plans.name',
            \DB::raw('(CASE 
            WHEN _CMstatus = "0" THEN "Inactive" 
            WHEN _CMstatus = "1" THEN "Active"  
            END) AS _CMstatus'),
            \DB::raw("DATE_FORMAT(_CMcreatedOn, '%d, %b %Y') as _CMcreatedOn") 
            )->get();  
        return Excel::download(new ExcelHelper($comapniesPlanData, $companyPlanHeader), "company-plans-".date('dMY').".xlsx"); 
    }
}
