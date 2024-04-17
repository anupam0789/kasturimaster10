<?php

namespace App\Http\Controllers\Admin;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller; 

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
        $leadsArray = [];
        $data['totalLeads'] =  Customer::count(); 
        $currentLeads =  Customer::selectRaw('DATE(created_at) as create_date, COUNT(*) as totalLeads')
            ->groupBy('create_date')
            ->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();
        foreach($currentLeads as $latestLeads)
        {
            $leadsArray[] = $latestLeads->totalLeads;
        }
        $data['currentleaddata'] = implode(',', $leadsArray);
        
        $lastWeekLeads = Customer::selectRaw('DATE(created_at) as create_date, COUNT(*) as totalLeads')
            ->groupBy('create_date')
            ->whereBetween('created_at', 
                [Carbon::now()->subWeek()->startOfWeek(), Carbon::now()->subWeek()->endOfWeek()]
            )->get();
        foreach($lastWeekLeads as $lastWLeads)
        {
            $lastWLeadsArray[] = $lastWLeads->totalLeads;
        } 
        $data['lastWeekleaddata'] = implode(',', $lastWLeadsArray);

        $data['lastWeekTotalLeads'] = Customer::selectRaw('DATE(created_at) as create_date')
            ->whereBetween('created_at', 
                [Carbon::now()->subWeek()->startOfWeek(), Carbon::now()->subWeek()->endOfWeek()]
            )->count();
         
             
        return view('admin.dashboard',$data); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
