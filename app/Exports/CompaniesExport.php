<?php

namespace App\Exports;

use App\Models\Company;
use Illuminate\Support\Facades\DB; 
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class CompaniesExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        $comapnies = DB::table('mm_companymaster')
            ->leftJoin('plans', 'mm_companymaster._CPlanId', '=', 'plans.id')
            ->select('_CMid','_CMcompanyName','_CMname', '_CMmobile', '_CMemail', 'plans.name',
            \DB::raw('(CASE 
            WHEN _CMstatus = "0" THEN "Inactive" 
            WHEN _CMstatus = "1" THEN "Active"  
            END) AS _CMstatus'),
            \DB::raw("DATE_FORMAT(_CMcreatedOn, '%d, %b %Y') as _CMcreatedOn") 
            )->get();  
        return $comapnies;
    }
    public function headings(): array
    {
        return [
            "#",
            "Company Name", 
            "Name",
            "Mobile",
            "Email",
            "Plan Name",
            "Status", 
            "Created Date", 
        ];
    }
}