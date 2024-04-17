<?php

namespace App\Exports;

use App\Models\Customer;
use Illuminate\Support\Facades\DB; 
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class CustomersExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        $customer =  Customer::select(
            'id',
            'firstname',
            'lastname',
            'email',
            'domain',
            'company',
            'mobile',
            'city',  
            \DB::raw('(CASE 
            WHEN customers.status = "0" THEN "Reject" 
            WHEN customers.status = "1" THEN "Approve" 
            ELSE "Approve,Reject" 
            END) AS status'),
            \DB::raw("DATE_FORMAT(customers.created_at, '%d, %b %Y') as create_at"), 
        )->get(); 
        
        return $customer;
    }
    public function headings(): array
    {
        return [
            "#",
            "First Name", 
            "Last Name",
            "Email",
            "Domain",
            "Company",
            "Mobile", 
            "City",
            "Status",
            "Create Date"
        ];
    }
}