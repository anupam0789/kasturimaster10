@extends('layouts.app')
@section('content')
    <section class="inner-heading">
    <h1>How it works?</h1>
</section>

<section class="howitworks-container">
    <div class="howitworks-row">
        <div class="howitworks-col">
            <div class="content">
                <h3><span>1</span>Registration</h3>
                <p>Provide basic information about your company and verify your email. After successful registration our team will be get in touch with you.</p>
            </div>
            <div class="thumb">
                <img src="{{ asset('assets/images/thumb-registration.png') }}" alt="Registration">
            </div>
        </div>
        
        <div class="howitworks-col">
            <div class="content">
                <h3><span>2</span>Review and Approved by our Team</h3>
                <p>Kasturi HR will review and approve your company profile.</p>
            </div>
            <div class="thumb">
                <img src="{{ asset('assets/images/thumb-review.png') }}" alt="Review and Approved by our Team">
            </div>
        </div>
        
        <div class="howitworks-col">
            <div class="content">
                <h3><span>3</span>Get your secure and unique subdomain</h3>
                <p>Kasturi HR will provide you secure and unique subdomain with login credentials to manage your compnay.</p>
            </div>
            <div class="thumb">
                <img src="{{ asset('assets/images/thumb-get-domain.png') }}" alt="Get your secure and unique subdomain">
            </div>
        </div>
        
        <div class="howitworks-col">
            <div class="content">
                <h3><span>4</span>Login into your account</h3>
                <p>Log-in on your unique sub-domain and start your journey with Kasturi HR.</p>
            </div>
            <div class="thumb">
                <img src="{{ asset('assets/images/thumb-login.png') }}" alt="Login into your account">
            </div>
        </div>
        
        <div class="howitworks-col">
            <div class="content">
                <h3><span>5</span>Start managing your company</h3>
                <p>Kasturi HR provides you option to manage your company's information, including all master data such as departments, designations, and bands. </p>
            </div>
            <div class="thumb">
                <img src="{{ asset('assets/images/thumb-manage-company.png') }}" alt="Start managing your company">
            </div>
        </div>
    </div>
</section>
@endsection