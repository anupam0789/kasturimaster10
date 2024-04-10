@extends('layouts.app')
@section('content')
    
<div class="features-page">
    <div class="features-listing">
        
        <div class="fix-it">
        <div class="features-tab active" onclick="location.href='{{ url('features/smart-hris-software') }}'">
            <div class="icon"><img src="{{ asset('assets/images/icon-document-management.png') }}" alt="Smart HRIS Software"></div>
            <div class="content">
                <div class="heading">Smart HRIS Software</div>
                <p>Employee life cycle to complex HR operations; simplify it all.</p>
                
                <ul>
                    <li><a class="active" href="{{ url('features/smart-hris-software/hiring-and-onboarding') }}">Hiring & Onboarding</a></li>
                </ul>
            </div>
        </div>
        
        <div class="features-tab" onclick="location.href='{{ url('features/advanced-payroll-software') }}'">
            <div class="icon"><img src="{{ asset('assets/images/icon-payroll-management.png') }}" alt="Advanced payroll software"></div>
            <div class="content">
                <div class="heading">Advanced Payroll Software</div>
                <p>Automate payroll processing with accuracy and complete transparency.</p>
                <ul>
                    <li class="nolink">Tax Management</li>
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
            <div class="sub-heading">Ensure easy onboarding</div>
            <h1><span>Smart Hiring</span> & Onboarding System</h1>
            <p>Simplify the onboarding process and welcome new hires with the best HR information systems. Kasturi HR enables a smooth transition for new hires to get started with profile & task management. </p>
            <div class="button">
                <a data-fancybox data-src="#bookademo" href="javascript:;" class="btn-green button-green">Book a Demo</a>
            </div>
        </div>
        
        <div class="features-zig-zag-container">
            <div class="features-zig-zag">
                <div class="content">
                    <h2><span>Seamless Onboarding</span> & Integration </h2>
                    <p>Kasturi HR makes it simple to welcome new hires into your organization, streamline administrative tasks, provide necessary details like company policy, and foster coordination with colleagues.</p>
                    <ul>
                        <li>Collect New Hire Information</li>
                        <li>Automate Workflow</li>
                        <li>Provide Company Details</li>
                        <li>User-friendly Dashboard</li>
                        <li>Payroll Management</li>
                    </ul>
                </div>
                <div class="thumb">
                    <img src="{{ asset('assets/images/thumb-Seamless-Onboarding-integration.png') }}" alt="Seamless Onboarding & Integration">
                </div>
            </div>
            
            <div class="features-zig-zag">
                <div class="content">
                    <h2><span>Track Progress</span> Easily</h2>
                    <p>Kasturi HR software for small business allows easy employee project & progress management with features like timesheet updates, leave & attendance management, and transparency at work. </p>
                    <ul>
                        <li>Assign tasks</li>
                        <li>Update work reports</li>
                        <li>Manage work status</li>
                        <li>Track progress </li>
                    </ul>
                </div>
                <div class="thumb">
                    <img src="{{ asset('assets/images/thumb-Track-Progress-Easily.png') }}" alt="Track Progress Easily">
                </div>
            </div>
            
            <div class="features-zig-zag">
                <div class="content">
                    <h2><span>Foster Collaboration</span> & Early Feedback</h2>
                    <p>Kasturi HR ensures every team gets transparency with projects through effective communication, enabling new hires & existing ones to update work reports and necessary updates. </p>
                    <ul>
                        <li>Easy Timesheets </li>
                        <li>Give updates</li>
                        <li>Check work report</li>
                        <li>Align new tasks</li>
                    </ul>
                </div>
                <div class="thumb">
                    <img src="{{ asset('assets/images/thumb-Foster-Collaboration-Early-Feedback.png') }}" alt="Foster Collaboration & Early Feedback">
                </div>
            </div>
            
            <div class="features-zig-zag">
                <div class="content">
                    <h2><span>Simplify</span> HR Operations</h2>
                    <p>The human resource talent management system allows HR personnel to automate complex processes, ensure reduced administrative work with employee self service, and maintain transparency with the workforce.</p>
                    <ul>
                        <li>Accurate Payroll Processing</li>
                        <li>Managed HR appraisal system</li>
                        <li>Flexible Employee Self Service </li>
                        <li>Manage Company Profile</li>
                    </ul>
                </div>
                <div class="thumb">
                    <img src="{{ asset('assets/images/thumb-Simplify-HR-Operations.png') }}" alt="Simplify HR Operations ">
                </div>
            </div>
        </div>
        
    </div>
</div>
    
<div class="banner-hr-system">
    <div class="container-fluid">
        <div class="banner-hr-system-row">
            <div class="content">
                <h2>Leverage <span>Cloud-based HRMS</span> for <span>effective workforce</span> management</h2>
                <p>Kasturi HR supports cloud-based efficiency, allowing managers to review employee performance and management of approved/ rejected days off for productivity & complete transparency.</p>
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
                    <h3>What is the benefit of the HRMS management tool? <img src="{{ asset('assets/images/arrow-down.png') }}" class="arrow-up"></h3>
                    <div class="faq-content">
                        <p>The best HRMS software in India enables employee efficiency at work, fosters transparency among the workforce, simplifies HR complex operations, and manages employee interaction with the company. The cloud-based HRMS management tool, Kasturi HR, provides benefits to organizations by reducing administrative work and updating employees with company policies & guidelines.</p>
                    </div>
                </div>

                <div class="accordion-faq">
                    <h3>Which is the best HR software for business in India? <img src="{{ asset('assets/images/arrow-down.png') }}" class="arrow-up"></h3>
                    <div class="faq-content">
                        <p>There are multiple HRMS software available that provide effective solutions, however, one of the preferred ones by early-age startups and small businesses is Kasturi HR. Megamaz Services powered HRMS software is developed to simplify HR processes and move the manual work to the digital platform. It reduces the cost and time of managing payroll & salary with accuracy.</p>
                    </div>
                </div>

                <div class="accordion-faq">
                    <h3>How helpful is an HRM tool for the hiring & onboarding process? <img src="{{ asset('assets/images/arrow-down.png') }}" class="arrow-up"></h3>
                    <div class="faq-content">
                        <p>The HR information systems allow companies to ensure smooth onboarding of new hires. It enables them to provide company details, including mission & vision, guidelines, appraisal policy, leave policy, and others, on a single platform. </p>
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
      "name": "What is the benefit of the HRMS management tool?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The best HRMS software in India enables employee efficiency at work, fosters transparency among the workforce, simplifies HR complex operations, and manages employee interaction with the company. The cloud-based HRMS management tool, Kasturi HR, provides benefits to organizations by reducing administrative work and updating employees with company policies & guidelines."
      }
    },
    {
      "@type": "Question",
      "name": "Which is the best HR software for business in India?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "There are multiple HRMS software available that provide effective solutions, however, one of the preferred ones by early-age startups and small businesses is Kasturi HR. Megamaz Services powered HRMS software is developed to simplify HR processes and move the manual work to the digital platform. It reduces the cost and time of managing payroll & salary with accuracy."
      }
    },
    {
      "@type": "Question",
      "name": "How helpful is an HRM tool for the hiring & onboarding process?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The HR information systems allow companies to ensure smooth onboarding of new hires. It enables them to provide company details, including mission & vision, guidelines, appraisal policy, leave policy, and others, on a single platform."
      }
    }
  ]
}
</script>
@endsection