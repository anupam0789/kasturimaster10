<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Mail\UserUnsubscribe; 
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Schema;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
     
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/mmx_login');
    }
    function unsubscribe(Request $request){

        $subject  = "Unsubscribe Request"; 
        Mail::to($request->email)->send(new UserUnsubscribe($subject, 'unsubscribe'));
  
        return view('unsubscribe');
    }
}
