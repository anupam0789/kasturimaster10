<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Mail\ProcessEmail;
use App\Models\Customer;
use App\Models\Usermaster;

class CustomerController extends Controller
{
    public function register()
    {
        return view('customer.register');
    }

    public function submitForm(Request $request)
    {
    	
        // Validate the form data
        $request->validate([
            'firstname' => 'required|string|max:255',
            'email' => 'required|email|max:128|unique:customers,email',
            'domain' => 'required|string|max:64|unique:customers,domain|alpha_dash',
            'company' => 'required|string|max:255',
            'mobile' => 'required|regex:/^[0-9+\-\s]{10,15}$/',
            'message' => 'required|string|min:15',
        ]);
        // Store the enquiry in the database
        Customer::create([
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'email' => $request->input('email'),
            'domain' => $request->input('domain'),
            'company' => $request->input('company'),
            'mobile' => $request->input('mobile'),
            'address1' => $request->input('address1'),
            'address2' => $request->input('address2'),
            'city' => $request->input('city'),
            'state' => $request->input('state'),
            'country' => '',
            'message' => $request->input('message'),
        ]);

        $data = [
        	'subject' =>  __('mail.signup_subject'),
        	'customer_firstname' => $request->input('firstname'),
        	'store_email' => env('STORE_EMAIL_SUPPORT'),
        	'store_name' => env('STORE_NAME'),
        	'store_url' => env('STORE_DOMAIN'),
        	
        ];
        //dd($data);
        $subject = __('mail.signup_subject');
        $message = view('mail.signup_request', ['data' => $data]);

        \Mail::to('info@megamaxservices.com')->send(new ProcessEmail($subject, $message,));

        return view('customer.success')->with('success', 'Registration process submitted successfully!');
    }

    public function findCompany()
    {
        return view('customer.find-company');
    }

    public function getCompany(Request $request){
        $json = [];
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:128',
        ]);
        
        if ($validator->fails()) {
            $json['errors'] = $validator->errors();
            return response()->json($json, 422);
        }
        
        $users = DB::table('mm_usermaster')
                    ->join('mm_companymaster', 'mm_usermaster._UMcompanyid', '=', 'mm_companymaster._CMid')
                    ->select('mm_usermaster._UMcompanyid', 'mm_usermaster._UMemail', 'mm_companymaster._CMcompanyName', 'mm_companymaster._CMDomain')
                    ->where('mm_usermaster._UMemail', $request->input('email'))->get();

        $data_user = [];
        foreach($users as $user){
            $data_user[] = array(
                "user_email" => $user->_UMemail,
                "company_id" => $user->_UMcompanyid,
                "company_name" => $user->_CMcompanyName,
                "company_domain" => $user->_CMDomain,
                "company_url" => 'http://'.$user->_CMDomain.'.'.strtolower(env('STORE_DOMAIN')).'/',
            );
        }
        $json['success'] = true;
        $json['user'] = $data_user;

        return response()->json($json, 200);
    
    }
}
