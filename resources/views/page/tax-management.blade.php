@extends('layouts.app')
@section('content')
    
<div class="features-page">
    <div class="features-listing">
        
        <div class="fix-it">
        
        <div class="features-tab active" onclick="location.href='{{ url('features/advanced-payroll-software') }}'">
            <div class="icon"><img src="{{ asset('assets/images/icon-payroll-management.png') }}" alt="Advanced payroll software"></div>
            <div class="content">
                <div class="heading">Advanced Payroll Software</div>
                <p>Automate payroll processing with accuracy and complete transparency.</p>
                <ul>
                    <li><a class="active" href="{{ url('features/advanced-payroll-software/tax-management') }}">Tax Management</a></li>
                    <li><a href="{{ url('features/advanced-payroll-software/salary-structure') }}">Salary Structure</a></li>
                    <li><a href="{{ url('features/advanced-payroll-software/statutory-compliance') }}">Statutory Compliance</a></li>
                    <li><a href="{{ url('features/advanced-payroll-software/payslip-generator') }}">Payslip Generator</a></li>
                </ul>
            </div>
        </div>
 
        
        <div class="features-tab" onclick="location.href='{{ url('features/time-and-attendance-management') }}'">
            <div class="icon"><img src="{{ asset('assets/images/icon-attendance-management.png') }}" alt="Time & Attendance Management"></div>
            <div class="content">
                <div class="heading">Time & Attendance Management</div>
                <p>Calculate employee working hours, overtime & short time done effortlessly.</p>
            </div>
        </div>
        
        <div class="features-tab" onclick="location.href='{{ url('features/leave-management') }}'">
            <div class="icon"><img src="{{ asset('assets/images/icon-leave-management.png') }}" alt="Leave Management"></div>
            <div class="content">
                <div class="heading">Leave Management</div>
                <p>Approve/ reject employee leave and provide status of requested leaves.</p>
            </div>
        </div>
        
        <div class="features-tab" onclick="location.href='{{ url('features/performance-management-system') }}'">
            <div class="icon"><img src="{{ asset('assets/images/icon-performance-management.png') }}" alt="Performance Management System"></div>
            <div class="content">
                <div class="heading">Performance Management System</div>
                <p>Monitor employee performance and simplify annual appraisal with ease.</p>
            </div>
        </div>
        
        <div class="features-tab" onclick="location.href='{{ url('features/smart-hris-software') }}'">
            <div class="icon"><img src="{{ asset('assets/images/icon-document-management.png') }}" alt="Smart HRIS Software"></div>
            <div class="content">
                <div class="heading">Smart HRIS Software</div>
                <p>Employee life cycle to complex HR operations; simplify it all.</p>
                
                <ul>
                    <li><a href="{{ url('features/smart-hris-software/hiring-and-onboarding') }}">Hiring & Onboarding</a></li>
                </ul>
            </div>
        </div>
        
        <div class="features-tab" onclick="location.href='{{ url('features/employee-self-service') }}'">
            <div class="icon"><img src="{{ asset('assets/images/icon-employee-self-service.png') }}" alt="Employee Self-Service"></div>
            <div class="content">
                <div class="heading">Employee Self Service</div>
                <p>Update contact information, work status, leave requests, and more.</p>
            </div>
        </div>

        </div>
        
    </div>
    
    <div class="features-content">
        <div class="features-main-banner">
            <div class="sub-heading">Simplify Employee Salary Tax</div>
            <h1><span>Tax Management</span> Software</h1>
            <p>Kasturi HR’s tax management feature calculates accurate taxes, automates calculations, and provides transparent insight to all; employees, the HR team, and company management.</p>
            <div class="button">
                <a data-fancybox data-src="#bookademo" href="javascript:;" class="btn-green button-green">Book a Demo</a>
            </div>
        </div>
        
        <div class="features-zig-zag-container">
            <div class="features-zig-zag">
                <div class="content">
                    <h2>Easy Employee <span>Tax Management</span></h2>
                    <p>Kasturi HR ensures employees get standard pay with calculated & required adjustments, providing complete details to them. </p>
                    <ul>
                        <li>Effortless Tax Declarations</li>
                        <li>Clear Tax Breakdowns</li>
                        <li>Update Tax Details</li>
                        <li>Reduced Workload</li>
                    </ul>
                </div>
                <div class="thumb">
                    <img src="{{ asset('assets/images/thumb-Easy-Employee-Tax-Management.png') }}" alt="Easy Employee Tax Management ">
                </div>
            </div>
            
            <div class="features-zig-zag">
                <div class="content">
                    <h2>Streamlined <span>Tax Process</span> for HR</h2>
                    <p>HR personnel get accuracy with advanced payroll management software and get to provide detailed insights to employees with their payslips, this reduces administrative workload. </p>
                    <ul>
                        <li>Simplify Payroll</li>
                        <li>Automate Payroll Process</li>
                        <li>Update Employee Salary Slips</li>
                        <li>Provide Brief Breakdowns</li>
                    </ul>
                </div>
                <div class="thumb">
                    <img src="{{ asset('assets/images/thumb-Streamlined-Tax-Process-for-HR.png') }}" alt="Streamlined Tax Process for HR">
                </div>
            </div>
            

        </div>
        
    </div>
</div>
    
<div class="banner-hr-system">
    <div class="container-fluid">
        <div class="banner-hr-system-row">
            <div class="content">
                <h2>Cloud based <span>payroll software</span>, Kasturi HR provides a <span>user-friendly interface</span></h2>
                <p>The payroll management software has a simplified interface, making it easy for HRs to handle the entire process easily. It ensures your company needs no more manual work or spreadsheets.</p>
                <div class="button">
                <a data-fancybox data-src="#bookademo" href="javascript:;" class="btn-green button-green">Book a Demo</a>
            </div>
            </div>
            <div class="thumb">
                <img src="{{ asset('assets/images/thumb-hr-system.png') }}" alt="HR System">
            </div>
        </div>
    </div>    
</div>
    
    
<section class="faq-container">
        <div class="faqs">
            <h2>Frequently Asked Questions</h2>

            <div class="faq">
                <div class="accordion-faq">
                    <h3>How does HRMS provide benefits to employees? <img src="{{ asset('assets/images/arrow-down.png') }}" class="arrow-up"></h3>
                    <div class="faq-content">
                        <p>The employee task management software ensures transparency at all levels. It provides necessary details to employees regarding payslips with structured breakdowns, enabling them to know certain details. </p>
                    </div>
                </div>

                <div class="accordion-faq">
                    <h3>Why is it important to opt for cloud-based HRMS management software? <img src="{{ asset('assets/images/arrow-down.png') }}" class="arrow-up"></h3>
                    <div class="faq-content">
                        <p>Kasturi HR is a flagship product of Megamax Services that provides relevant features to the HR team and employees, enabling them to save employee information in the portal, including payslips, work reports, attendance, shift timing, etc. Thus, it saves time and resources for small businesses and early-age startups.</p>
                    </div>
                </div>

                <div class="accordion-faq">
                    <h3>Can employees generate payslips with Kasturi HR? <img src="{{ asset('assets/images/arrow-down.png') }}" class="arrow-up"></h3>
                    <div class="faq-content">
                        <p>Yes, with Kasturi HR, employees can download pay slip for specific months they prefer, ensuring reduced administrative workload. </p>
                    </div>
                </div>

                <div class="accordion-faq">
                    <h3>Does it require an expert to manage HR information systems? <img src="{{ asset('assets/images/arrow-down.png') }}" class="arrow-up"></h3>
                    <div class="faq-content">
                        <p>The user-friendliness of Kasturi HR enables personnel to easily get the work done without being an expert. Its navigation is simple and every feature defines the process with brief. Within minutes, you get its complete functionalities.</p>
                    </div>
                </div>

            </div>

        </div>
</section>

@endsection