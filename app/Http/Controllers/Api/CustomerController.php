<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function getCompany(Request $request){
        $json = [];
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:128',
        ]);
        //dd($validator);
        if ($validator->fails()) {
            $json['errors'] = $validator->errors();
            $response = [
                'status' => 400,
                'error' => true,
                'message' => $validator->errors()             
            ];
            return response()->json($response, 422);
        }

        if(!$json){
            $users = DB::table('mm_usermaster')
                    ->join('mm_companymaster', 'mm_usermaster._UMcompanyid', '=', 'mm_companymaster._CMid')
                    ->select('mm_companymaster._CMid', 'mm_usermaster._UMemail', 'mm_companymaster._CMcompanyName', 'mm_companymaster._CMcompanylogo', 'mm_companymaster._CMDomain')
                    ->where('mm_usermaster._UMemail', $request->input('email'))->get()->toArray();

                    //echo "<pre>";print_r($users);die;
            $json['success'] = 200;
            if($users){
                $data_user = [];
                foreach($users as $user){
                    $data_user[] = array(
                        "_UMemail" => $user->_UMemail,
                        "_CMid" => $user->_CMid,
                        "_CMcompanyName" => $user->_CMcompanyName,
                        "_CMDomain" => $user->_CMDomain,
                        "_CMcompanyURL" => 'https://'.$user->_CMDomain.'.'.strtolower(env('STORE_DOMAIN')).'/',
                        "_CMcompanylogo" => 'https://'.$user->_CMDomain.'.'.strtolower(env('STORE_DOMAIN')).'/public/uploads/'.$user->_CMDomain.'/'.$user->_CMcompanylogo,
                    );
                }

                $response = [
                    'status' => 200,
                    'error' => false,
                    'message' => 'Success' ,
                    'data' =>  $data_user      
                ];
                return response()->json($response, 200);
            } else {
                $response = [
                    'status' => 400,
                    'error' => true,
                    'message' => 'Employee not found'                
                ];
                return response()->json($response, 400);
            }
            
        }        
    
    }
}
