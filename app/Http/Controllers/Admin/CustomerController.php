<?php

namespace App\Http\Controllers\Admin;

use App\Models\Company;
use App\Models\Customer; 
use App\Models\Usermaster;
use Illuminate\Http\Request;  
use App\Exports\CustomersExport; 
use App\Mail\Admin\CustomerEmail; 
use Illuminate\Support\Facades\DB; 
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Schema;
 

class CustomerController extends Controller
{
    public function customers(Request $request)
    {
        if(isset($request->search)){
            $customers = Customer::where('firstname', 'LIKE', "%$request->searchName%")
            ->orWhere('lastname', 'LIKE', "%$request->searchName%")
            ->orWhereRaw("concat(firstname, ' ', lastname) like '%" .$request->searchName. "%' ")
            ->orWhere('email', 'LIKE', "%$request->searchName%")
            ->orWhere('domain', 'LIKE', "%$request->searchName%")
            ->orWhere('company', 'LIKE', "%$request->searchName%")
            ->orWhere('mobile', 'LIKE', "%$request->searchName%")
            ->orderBy('created_at', 'DESC')
            ->paginate(10);
        }else{
            $customers = Customer::orderBy('created_at', 'DESC')->paginate(10);
        }
       
        return view('admin.customer.index',compact('customers'));
    }

    public function customerAjaxData(Request $request)
    { 
        $customer= Customer::where('customer_id', $request->customerID)->first(); 
        return response()->json($customer);
    }

    public function rejectCustomer(Request $request){
       
        $customer = Customer::find($request->customerID);
        $subject = 'Enquiry Rejected'; 
        $mail_data = [
            'firstname' => $customer->firstname,
            'lastname' => $customer->lastname, 
            'username' => $customer->email, 
        ]; 
        echo 1;exit;
        //Mail::to($customer->email)->send(new CustomerEmail($subject, $mail_data, 'admin.mail.reject'));
        return redirect()->back()->with('success', 'Enquiry rejected successfully');; 
    }
     
    public function sendStatus(Request $request)
    { 
         
        // Validate the form data
        // $validatedData = $request->validate([
        //     'message' => 'required|string',
        //     // Add more validation rules as needed
        // ]);
       
        //Logic to send email
        
        $subject = '';
        if($request->input('enquiry_status') == 1)
            $subject = 'Welcome to KasturiHR! Your Onboarding Journey Begins Here';
        elseif($request->input('enquiry_status') == 2)
            $subject = 'Enquiry Rejected'; 
        $customer = Customer::find($request->customerID); 
        
        if ($customer) {
            if($request->input('enquiry_status') == 1){
                
                $this->createDatabaseBasedOnCondition($customer->domain); 
                // Copy default database to the newly created database
                $defaultDatabaseName = 'masterkasturi10'; // Replace with your default database name
                $newlyCreatedDatabaseName = 'megamaxinc_' . $customer->domain; // Replace with your naming convention
                
                // Use Laravel Schema to manipulate tables
                Schema::connection('default')->getConnection()->statement("CREATE DATABASE IF NOT EXISTS $newlyCreatedDatabaseName");
                
                // Use DB facade to copy tables and data from default to the newly created database
                $tables = DB::connection('default')->select('SHOW TABLES');
                foreach ($tables as $table) {
                    $tableName = reset($table);
                    DB::connection('default')->statement("CREATE TABLE IF NOT EXISTS $newlyCreatedDatabaseName.$tableName LIKE $defaultDatabaseName.$tableName");
                    DB::connection('default')->statement("INSERT INTO $newlyCreatedDatabaseName.$tableName SELECT * FROM $defaultDatabaseName.$tableName");
                }
                //Inserting default user
                DB::statement("UPDATE $newlyCreatedDatabaseName.users 
                SET `name`='', `email`='$customer->email',`created_at`=NOW() WHERE `id`=1");
                
                //SET `_Title`='', `_UserName`='$customer->email', `_FirstName`='$customer->firstname', `_LastName`='$customer->lastname', `_UserEmail`='$customer->email', `_UserPersonalEmail`='$customer->email', `_UserMobile`='$customer->mobile', `_StartDate`=NOW(), `_CreatedDate`=NOW() WHERE `_UserID`=1");
                $companyMasterData = [
                    '_CMDomain' => $customer->domain,
                    '_CMdatabase' => $newlyCreatedDatabaseName,
                    '_CMname' => $customer->firstname,
                    '_CMemail' => $customer->email,
                    '_CMmobile' => $customer->mobile,
                    '_CMcountrycode' => '',
                    '_CMcompanyName' => $customer->company,
                    '_CMcurrencyCode' => '',
                ];

                $companyMaster = Company::create($companyMasterData);
                $lastInsertedId = $companyMaster->_CMid;
                
                $userMasterData = [
                    '_UMcompanyid' => $lastInsertedId,
                    '_UMemail' => $customer->email,
                ];

                $userMaster = Usermaster::create($userMasterData);

                // DB::statement("INSERT INTO $newlyCreatedDatabaseName.pms_companydetails 
                //     (`company_id`, `_DefaultRM`) 
                //     VALUES 
                //     ('$lastInsertedId', 1)"
                // );                
            }
            // change status
            //$customerEmail = $customer->email;
            $customer->status = $request->input('enquiry_status');
            //$customer->save();
             
            $mail_data = [
                'firstname' => $customer->firstname,
                'lastname' => $customer->lastname,
                'login_url' => 'http://megamaxhrms.online/mmx_login',
                'username' => $customer->email,
                'password' => rand(),
            ];
            
           //Mail::to($customer->email)->send(new CustomerEmail($subject, $mail_data,'admin.mail.approve'));
        }
        echo 1;exit;
        return redirect('/admin')->with('success', 'Email sent successfully!');
    }

    public function createDatabaseBasedOnCondition($id)
    {
        $dbName = 'megamaxinc_' . $id; 
        // Check if the database already exists
        $existingDB = DB::select("SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = ?", [$dbName]);
       
        if (empty($existingDB)) {
            // Create the new database using raw SQL query
            DB::statement("CREATE DATABASE $dbName");
        }
       
        // Other logic or response handling as needed
    }

    public function exportCustomers()
    {
        return Excel::download(new CustomersExport(), "customer-leads-".date('dMY').".xlsx");
    }

}
