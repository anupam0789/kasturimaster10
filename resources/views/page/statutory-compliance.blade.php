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
                    <li><a class="active" href="{{ url('features/advanced-payroll-software/statutory-compliance') }}">Statutory Compliance</a></li>
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
            <div class="sub-heading">Automate the Process</div>
            <h1><span>Ensure Statutory Compliance</span> with Kasturi HR</h1>
            <p>Welcome to the Kasturi HR and management software that fosters statutory compliance in all its functions, ensuring standard workflow and employee benefits.</p>
            <div class="button">
                <a data-fancybox data-src="#bookademo" href="javascript:;" class="btn-green button-green">Book a Demo</a>
            </div>
        </div>
        
        <div class="features-zig-zag-container">
            <div class="features-zig-zag">
                <div class="content">
                    <h2><span>Secured</span> Employee Benefit</h2>
                    <p>The smart human resource talent management software ensures seamless integration of statutory compliance into our services, enabling workflow to adhere to the law. </p>
                    <ul>
                        <li>Company guidelines that adhere to the law</li>
                        <li>Workflow as per legal law standards</li>
                        <li>Secured employee data storage</li>
                        <li>Accurate payroll with tax adherence </li>
                    </ul>
                </div>
                <div class="thumb">
                    <img src="{{ asset('assets/images/thumb-Secured-Employee-Benefit.png') }}" alt="Secured Employee Benefit">
                </div>
            </div>
            
            <div class="features-zig-zag">
                <div class="content">
                    <h2>Streamlined <span>Onboarding Process</span></h2>
                    <p>Just as we foster transparency among the workforce, we provide complete details related to the company policies to new hires, extending our commitment to statutory compliance.</p>
                    <ul>
                        <li>Transparency with policies</li>
                        <li>Features to update HRMS</li>
                        <li>Update company policies</li>
                        <li>Manage employee information</li>
                    </ul>
                </div>
                <div class="thumb">
                    <img src="{{ asset('assets/images/thumb-Streamlined-Onboarding-Process.png') }}" alt="Streamlined Onboarding Process">
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
                    <h3>How do you ensure that HRMS software considers statutory compliance? <img src="{{ asset('assets/images/arrow-down.png') }}" class="arrow-up"></h3>
                    <div class="faq-content">
                        <p>Kasturi HR is not just another HR management tool that provides multiple features to improve efficiency, but also ensures statutory compliance at its core. </p>
                    </div>
                </div>

                <div class="accordion-faq">
                    <h3>What is the role of statutory compliance in Kasturi HR? <img src="{{ asset('assets/images/arrow-down.png') }}" class="arrow-up"></h3>
                    <div class="faq-content">
                        <p>Statutory compliance is the fundamental aspect of Kasturi HR that ensures the functioning of this HR software for business aligns with legal and regulatory standards. </p>
                    </div>
                </div>

                <div class="accordion-faq">
                    <h3>Why statutory compliance is important to follow? <img src="{{ asset('assets/images/arrow-down.png') }}" class="arrow-up"></h3>
                    <div class="faq-content">
                        <p>Statutory compliance ensures businesses function under the standard guidelines framed by the law, ensuring zero to minimal legal risks and potential fines. Additionally, it fosters a positive work environment for all that builds trustworthiness among the workforce and brand awareness.</p>
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
      "name": "How do you ensure that HRMS software considers statutory compliance?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Kasturi HR is not just another HR management tool that provides multiple features to improve efficiency, but also ensures statutory compliance at its core."
      }
    },
    {
      "@type": "Question",
      "name": "What is the role of statutory compliance in Kasturi HR?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Statutory compliance is the fundamental aspect of Kasturi HR that ensures the functioning of this HR software for business aligns with legal and regulatory standards."
      }
    },
    {
      "@type": "Question",
      "name": "Why statutory compliance is important to follow?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Statutory compliance ensures businesses function under the standard guidelines framed by the law, ensuring zero to minimal legal risks and potential fines. Additionally, it fosters a positive work environment for all that builds trustworthiness among the workforce and brand awareness."
      }
    }
  ]
}
</script>
@endsection