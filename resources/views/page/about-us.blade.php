@extends('layouts.app')
@section('content')
    <div class="sep-bg">
        <div class="c-1 circle">
            <img src="{{ asset('assets/images/c-1.png') }}" alt="circle">
        </div>
        <div class="c-2 circle">
            <img src="{{ asset('assets/images/c-2.png') }}" alt="circle">
        </div>
        <div class="c-3 circle">
            <img src="{{ asset('assets/images/c-3.png') }}" alt="circle">
        </div>
        <div class="c-4 circle">
            <img src="{{ asset('assets/images/c-4.png') }}" alt="circle">
        </div>
        <div class="c-5 circle">
            <img src="{{ asset('assets/images/c-5.png') }}" alt="circle">
        </div>
        <div class="c-6 circle">
            <img src="{{ asset('assets/images/c-6.png') }}" alt="circle">
        </div>
        <div class="bulb">
            <img src="{{ asset('assets/images/bulb.gif') }}" alt="circle">
        </div>
    </div>
    <section class="about-content">
            
            <div class="about-text">
                <h2>About Kasturi HR</h2>
                <p>KASTURI HR, or human resources management system developed by Megamax services, is a suite of software applications used to manage human resources and related processes throughout the employee lifecycle. An KASTURI HR enables a company to fully understand its workforce while staying compliant with changing tax laws and labor regulations.</p>

                <p>HR leaders and staff are the primary users, given that they run day-to-day workforce operations and are responsible for compliance and performance reporting. However, HR isn’t the only department that benefits. Companies can empower managers and employees with self-service for common tasks—an important selling point for younger hires. Executives can use an KASTURI HR to generate data on workforce trends and their business implications.</p>
            </div>
        
        <div class="about-thumb">
                <img src="{{ asset('assets/images/about-img.png') }}" alt="about us">
            </div>
    </section>
    
    

    <section class="mission-and-vision-container">
        <h2>Mission & Vision</h2>
        <div class="mission-vision-row">
            <div class="mission-vision-col">
                <div class="thumb">
                    <img src="{{ asset('assets/images/thumb-mission.png') }}" alt="Mission">
                </div>
                <div class="content">
                    <h3>Our Mission</h3>
                    <p>Welcome to Kasturi HR, where our mission is to revolutionize the way organizations manage their human resources, fostering a workplace that thrives on efficiency, transparency, and growth.</p>
                    
                    <p>At Kasturi HR, we believe in empowering businesses to elevate their HR processes through cutting-edge technology and intuitive solutions. Our mission is to provide a comprehensive and seamlessly integrated HRMS platform that transforms the traditional approach to human resource management.</p>
                </div>
            </div>
            
            <div class="mission-vision-col">
                <div class="thumb">
                    <img src="{{ asset('assets/images/thumb-vision.png') }}" alt="Vision">
                </div>
                <div class="content">
                    <h3>Our Vision</h3>
                    <p>Our vision is to redefine the future of Human Resource Management through innovative and holistic solutions. At Kasturi HR, we aspire to be the catalyst for transformative change in the way organizations perceive and manage their human capital. Our vision is deeply rooted in the belief that a well-managed workforce is the cornerstone of every successful enterprise.</p>
                </div>
            </div>
        </div>
    </section>
    @endsection