@extends('admin.mail.layouts.app')
@section('content')
    <p>
    Hi {{ $firstname }},
    </p>
    <p>
    We're thrilled to welcome you to {{ config('app_config.config_name') }}, the all-in-one platform to streamline your HR processes!
    </p>
    <p>
    Your request to access our HRMS portal has been approved. Now you can leverage Kasturi HR's features to manage your employees, payroll, and more, all in one place. 
    </p>
    <b>Here's what you need to get started:</b><br>
    <b>Login URL:</b> {{ $login_url }}<br>
    <b>Username:</b> {{  $username }}<br>
    <b>Password:</b> {{ $password }}<br>
    <p>
    All you need is to simply head over to the login URL and enter your credentials. Our dedicated customer support team is here to assist you! Feel free to reach out to us at {{ config('app_config.config_tollfree') }} or {{ config('app_config.config_email_support') }}
    </p>
    <p>
    We're confident {{ config('app_config.config_name') }} will become your go-to solution for managing your workforce effectively. Welcome aboard!
    </p>
    <p>
        <b>Best regards,</b><br>
        <b>The {{ config('app_config.config_name') }} Team,</b>
    </p>
@endsection 
