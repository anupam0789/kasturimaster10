<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function customers()
    {
        $customers = Customer::all();
        return view('admin.customer.index',compact('customers'));
    }
}
