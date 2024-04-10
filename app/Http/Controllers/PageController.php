<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function appraisal()
    {
        return view('page.appraisal');
    }

    public function attendance()
    {
        return view('page.attendance');
    }

    public function claim()
    {
        return view('page.claim');
    }

    public function companyProfile()
    {
        return view('page.company-profile');
    }

    public function employee()
    {
        return view('page.employee');
    }

    public function leave()
    {
        return view('page.leave');
    }    

    public function faq()
    {
        return view('page.faq');
    }

    public function howItWork()
    {
        return view('page.how-it-work');
    }

}
