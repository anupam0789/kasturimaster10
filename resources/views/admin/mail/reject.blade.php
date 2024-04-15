@extends('admin.mail.layouts.app')
@section('content')
    <p>
    Hi {{ $firstname }},
    </p>
    <p>
    Thank you for your interest in {{ config('app_config.config_name') }}, the all-in-one platform for managing your HR needs.
    </p>
    <p>
    We've carefully reviewed your request to access our HRMS portal. While we appreciate your interest, we're unable to grant access at this time. 
    </p>
    <p>
    Should your needs change in the future, please don't hesitate to revisit {{ config('app_config.config_name') }}. In the meantime, we wish you all the best in managing your endeavors.
    </p>
    <p>
        <b>Sincerely,</b><br>
        <b>The {{ config('app_config.config_name') }} Team</b>
    </p>
@endsection 
