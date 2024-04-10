@extends('layouts.app')
@section('content')
    <p>
        Dear {{ $data['customer_firstname'] }},
    </p>
    <p>
        We hope this email finds you well. Thank you for choosing KasturiHr.com for your company registration needs.<br/>
        We have received your company registration request, and our team is currently reviewing the provided information. We appreciate your interest in partnering with {{ $data['store_url'] }}.
    </p>
    <p>
        Please be assured that we are diligently processing your request. Our team will carefully assess the details you've submitted, and we aim to provide you with a response soon.
        <br/>
        We understand the importance of timely information, and we will make every effort to keep you informed throughout the registration process.
    </p>
    <p>
        If you have any urgent inquiries or additional details to share, please feel free to reply to this email or contact our dedicated support team at {{ $data['store_email'] }}.
        <br/>
        Once again, thank you for choosing KasturiHr.com. We look forward to the possibility of serving your company.
    </p>
    <p>
        Best regards,<br>
        {{$data['store_name']}}<br>
    </p>
@endsection 
