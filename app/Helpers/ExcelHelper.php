<?php

namespace App\Helpers;

use App\Models\Customer;
use Illuminate\Support\Facades\DB; 
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExcelHelper implements FromCollection, WithHeadings
{
    public $data;
    public $header;

    public function __construct($data, $header) {
        $this->data = $data;
        $this->header = $header;
    }
    public function collection()
    { 
        return $this->data;
    }
    public function headings(): array
    {
        return $this->header; 
    }
}