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
                    <li class="nolink">Tax Management</li>
                    <li><a href="{{ url('features/advanced-payroll-software/salary-structure') }}">Salary Structure</a></li>
                    <li><a href="{{ url('features/advanced-payroll-software/statutory-compliance') }}">Statutory Compliance</a></li>
                    <li><a class="active" href="{{ url('features/advanced-payroll-software/payslip-generator') }}">Payslip Generator</a></li>
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
            <div class="sub-heading">Download effortlessly</div>
            <h1><span>Smart Payslip</span> Generator</h1>
            <p>Kasturi HR, the cloud based payroll software ensures HR personnel and employee, both get to simplify the process. HR personnel easily initiate, process, and update payslip, and employees get it with a click.</p>
            <div class="button">
                <a data-fancybox data-src="#bookademo" href="javascript:;" class="btn-green button-green">Book a Demo</a>
            </div>
        </div>
        
        <div class="features-zig-zag-container">
            <div class="features-zig-zag">
                <div class="content">
                    <h2>Make Updates with <span>Transparency</span></h2>
                    <p>HR personnel can easily manage salaries of the workforce through a single portal, Kasturi HR, ensuring every edit get done with accuracy. </p>
                    <ul>
                        <li>Request expense claim</li>
                        <li>Check request status</li>
                        <li>Approve/ reject request</li>
                        <li>Process payments accordingly</li>
                    </ul>
                </div>
                <div class="thumb">
                    <img src="{{ asset('assets/images/thumb-Make-Updates-with-Transparency.png') }}" alt="Make Updates with Transparency">
                </div>
            </div>
            
            <div class="features-zig-zag">
                <div class="content">
                    <h2><span>Structured</span> Monthly Pay</h2>
                    <p>Kastur HR provides detailed structured and options where HR personnel and update every payroll detail in the portal. </p>
                    <ul>
                        <li>Basic Salary</li>
                        <li>Multiple Allowances</li>
                        <li>Bonus Details</li>
                        <li>Employee/ Employer Dashboard</li>
                    </ul>
                </div>
                <div class="thumb">
                    <img src="{{ asset('assets/images/thumb-Structured-Monthly-Pay.png') }}" alt="Structured Monthly Pay">
                </div>
            </div>
            
            <div class="features-zig-zag">
                <div class="content">
                    <h2>Process According to <span>Working Shift</span></h2>
                    <p>The attendance and leave management software makes it easier for HR personnel to initiate incentives and bonus considering employee performance by analyzing work reports, project status, etc.</p>
                    <ul>
                        <li>Check work report</li>
                        <li>Review performance</li>
                        <li>Update accordingly</li>
                        <li>Initiate updated payment</li>
                    </ul>
                </div>
                <div class="thumb">
                    <img src="{{ asset('assets/images/thumb-Process-According-to-Working-Shift.png') }}" alt="Process According to Working Shift">
                </div>
            </div>
            
            <div class="features-zig-zag">
                <div class="content">
                    <h2><span>Single Click</span> Payslip Generation</h2>
                    <p>It is easier for employees to download pay slips for any month. Kasturi HR ensures process become effortless.</p>
                    <ul>
                        <li>Go to “Payroll”</li>
                        <li>Fill-in the date</li>
                        <li>Click “Download Pdf” </li>
                        <li>Get payslip instantly</li>
                    </ul>
                </div>
                <div class="thumb">
                    <img src="{{ asset('assets/images/thumb-Single-Click-Payslip-Generation.png') }}" alt="Single Click Payslip Generation">
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
                    <h3>How can I generate payslips using Kasturi HR management software? <img src="{{ asset('assets/images/arrow-down.png') }}" class="arrow-up"></h3>
                    <div class="faq-content">
                        <p>It is much easier to download payslips using Kasturi HR, the best HRMS software in India. The software enables employee self service, meaning HR personnel need not intervene to generate salary slips for each employee. Employees only need to fill in specific date and with a single click, it gets downloaded to their system.</p>
                    </div>
                </div>

                <div class="accordion-faq">
                    <h3>What functions does a payslip generator HRMS provide to admin? <img src="{{ asset('assets/images/arrow-down.png') }}" class="arrow-up"></h3>
                    <div class="faq-content">
                        <p>Kasturi HR is one of the preferred HR information systems in India, enabling companies & HR personnel to update payroll with flexibility. The tool provides the filter option to admin to churn out specific data, including employee reimbursement requests, travel claims, etc. Moreover, admin can also check manager status of approved/ rejected requests.</p>
                    </div>
                </div>

                <div class="accordion-faq">
                    <h3>Why is it important for companies to integrate HRMS employee portals? <img src="{{ asset('assets/images/arrow-down.png') }}" class="arrow-up"></h3>
                    <div class="faq-content">
                        <p>There are multiple significance, including simplified HR operations, reduced administrative workload & HR intervention, employee self service that allows self payslip generation, structured salary breakdowns, transparency with employee claim request status, and more.</p>
                    </div>
                </div>

                <div class="accordion-faq">
                    <h3>Do you believe HRMS payslip generator is helpful for employees? <img src="{{ asset('assets/images/arrow-down.png') }}" class="arrow-up"></h3>
                    <div class="faq-content">
                        <p>There is no need to rush to HR personnel to get salary slips for specific months. The advanced payslip generator, Kasturi HR allows single click payslip generation. It makes reduced intervention of HR personnel to minor issues.</p>
                    </div>
                </div>

            </div>

        </div>
</section>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "How can I generate payslips using Kasturi HR management software?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "It is much easier to download payslips using Kasturi HR, the best HRMS software in India. The software enables employee self-service, meaning HR personnel need not intervene to generate salary slips for each employee. Employees only need to fill in specific date and with a single click, it gets downloaded to their system."
      }
    },
    {
      "@type": "Question",
      "name": "What functions does a payslip generator HRMS provide to admin?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Kasturi HR is one of the preferred HR information systems in India, enabling companies & HR personnel to update payroll with flexibility. The tool provides the filter option to admin to churn out specific data, including employee reimbursement requests, travel claims, etc. Moreover, admin can also check manager status of approved/ rejected requests."
      }
    },
    {
      "@type": "Question",
      "name": "Why is it important for companies to integrate HRMS employee portals?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "There are multiple significances, including simplified HR operations, reduced administrative workload & HR intervention, employee self-service that allows self-payslip generation, structured salary breakdowns, transparency with employee claim request status, and more."
      }
    },
    {
      "@type": "Question",
      "name": "Do you believe HRMS payslip generator is helpful for employees?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "There is no need to rush to HR personnel to get salary slips for specific months. The advanced payslip generator, Kasturi HR allows single click payslip generation. It makes reduced intervention of HR personnel to minor issues."
      }
    }
  ]
}
</script>
@endsection