<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\ProcessEmail;

use Illuminate\Http\Request;
use App\Models\Enquiry;
use Illuminate\Support\Facades\Validator;

class EnquiryController extends Controller
{
    public function contactForm()
    {
        return view('contactus');
    }

    public function submitForm(Request $request)
    {
        // Validate the form data
        $request->validate([
            'firstname' => 'required|string|max:128',
            'email' => 'required|email|max:128',
            //'mobile_number' => ['required', 'regex:/^[0-9]{10}$/'],
            'message' => 'required|string|min:15',
        ]);

        // Store the enquiry in the database
        Enquiry::create([
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'company' => $request->input('company'),
            'mobile' => $request->input('mobile_number'),
            'email' => $request->input('email'),
            'type' => $request->input('type'),
            'message' => $request->input('message'),
        ]);

        // Send email to the relevant recipient(s)
        //Mail::to($request->input('email'))->send(new ProcessEmail($request->input('type'), 'Enquiry submitted successfully!'));

        return redirect()->route('contact.form')->with('success', 'Enquiry submitted successfully!');
    }

    public function submitFormDemo(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fullname' => 'required|string|max:128',
            'email' => 'required|email|max:128',
            'mobile_number' => ['required', 'regex:/^[0-9]{10}$/'],
            'company' => 'required|string|max:128',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        //dd($request->input());
        // Store the enquiry in the database
        Enquiry::create([
            'firstname' => $request->input('fullname'),
            'company' => $request->input('company'),
            'mobile' => $request->input('mobile_number'),
            'email' => $request->input('email'),
            'type' => $request->input('type'),
        ]);

        //Mail::to($request->input('email'))->send(new ProcessEmail($request->input('type'), 'Enquiry submitted successfully.'));

        return response()->json(['success' => 'Book demo enquiry submitted successfully']);
    }

    public function submitFormCallback(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fullname' => 'required|string|max:128',
            'mobile' => ['required', 'regex:/^[0-9]{10}$/'],
            'company' => 'required|string|max:128',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Store the enquiry in the database
        Enquiry::create([
            'firstname' => $request->input('fullname'),
            'company' => $request->input('company'),
            'mobile' => $request->input('mobile'),
            'email' => '',
            'type' => $request->input('type'),
        ]);

        //Mail::to($request->input('email'))->send(new ProcessEmail($request->input('type'), 'Callback enquiry submitted successfully!'));

        return response()->json(['success' => 'Callback enquiry submitted successfully!']);
    }
}
