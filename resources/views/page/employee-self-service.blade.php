@extends('layouts.app')
@section('content')
    
<div class="features-page">
    <div class="features-listing">
        
        <div class="fix-it">
        <div class="features-tab active" onclick="location.href='{{ url('features/employee-self-service') }}'">
            <div class="icon"><img src="{{ asset('assets/images/icon-employee-self-service.png') }}" alt="Employee Self-Service"></div>
            <div class="content">
                <div class="heading">Employee Self Service</div>
                <p>Update contact information, work status, leave requests, and more.</p>
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
        
        

        </div>
        
    </div>
    
    <div class="features-content">
        <div class="features-main-banner">
            <div class="sub-heading">Be productive with transparency</div>
            <h1>Advanced <span>Employee Self Service</span> Feature</h1>
            <p>User-friendly dashboard that allows complete management of employee daily tasks, salary updates, travel expense claims, regular attendance, leave requests, and many more. </p>
            <div class="button">
                <a data-fancybox data-src="#bookademo" href="javascript:;" class="btn-green button-green">Book a Demo</a>
            </div>
        </div>
        
        <div class="features-zig-zag-container">
            <div class="features-zig-zag">
                <div class="content">
                    <h2>Take Charge of <span>HR Requirements</span></h2>
                    <p>Kasturi HR empowers your team to easily update their contact information, salary account details while onboarding, update relevant information, ensuring HR personnel frees up HR for strategic tasks.</p>
                    <ul>
                        <li>Profile Management</li>
                        <li>Submit Leave Request</li>
                        <li>Update Attendance</li>
                        <li>Download Salary Slip</li>
                    </ul>
                </div>
                <div class="thumb">
                    <img src="{{ asset('assets/images/thumb-Take-Charge-of-HR-Requirements.png') }}" alt="Take Charge of HR Requirements">
                </div>
            </div>
            
            <div class="features-zig-zag">
                <div class="content">
                    <h2>Transparency with <span>Performance Evaluation</span></h2>
                    <p>Cloud-based HRMS makes performance management a collaborative process, ensuring employees can easily update managers with daily work reports with complete transparency.</p>
                    <ul>
                        <li>Update Timesheets</li>
                        <li>Share Work Reports</li>
                        <li>Receive Feedback</li>
                        <li>Track Task Status</li>
                    </ul>
                </div>
                <div class="thumb">
                    <img src="{{ asset('assets/images/thumb-Transparency-with-Performance-Evaluation.png') }}" alt="Transparency with Performance Evaluation">
                </div>
            </div>
            
            <div class="features-zig-zag">
                <div class="content">
                    <h2><span>Flexibility</span> & <span>Accessibility</span></h2>
                    <p>Kasturi HR, the advanced HRMS, ensures employee self service login becomes easily accessible, making employees manage HR tasks with minimal effort. </p>
                    <ul>
                        <li>Centralized Dashboard</li>
                        <li>Web/ Mobile Accessibility </li>
                        <li>Top-notch Security</li>
                        <li>User-friendly Navigation</li>
                    </ul>
                </div>
                <div class="thumb">
                    <img src="{{ asset('assets/images/thumb-Flexibility-Accessibility.png') }}" alt="Flexibility & Accessibility">
                </div>
            </div>
            
            <div class="features-zig-zag">
                <div class="content">
                    <h2>Manage <span>Employee Salary Concerns</span></h2>
                    <p>Kastur HR is an advanced employee self service portal that promotes employee concerns. The software allows employees to raise concerns regarding attendance, working hours, and time duration for effective salary adjustments. </p>
                    <ul>
                        <li>Raise discrepancy when required</li>
                        <li>Check accurate working hours</li>
                        <li>Get updates on every detail</li>
                        <li>Reduce workload with timesheet updates</li>
                    </ul>
                </div>
                <div class="thumb">
                    <img src="{{ asset('assets/images/thumb-Manage-Employee-Salary-Concerns.png') }}" alt="Manage Employee Salary Concerns">
                </div>
            </div>
        </div>
        
    </div>
</div>
    
<div class="banner-hr-system">
    <div class="container-fluid">
        <div class="banner-hr-system-row">
            <div class="content">
                <h2><span>Cloud-based HRMS</span> to improve productivity with <span>ESS</span></h2>
                <p>Kasturi HR’s ESS portal helps employees have access to necessary details, teammates, company policy & guidelines, ensuring trust building among the workforce at all levels.</p>
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
                    <h3>Why is the Employee Self Service portal important for organizations? <img src="{{ asset('assets/images/arrow-down.png') }}" class="arrow-up"></h3>
                    <div class="faq-content">
                        <p>It reduces the administrative workload by allowing employees to update necessary details on the portal themselves. It reduces HR intervention, allowing them to focus on strategic tasks and fosters employee empowerment.</p>
                    </div>
                </div>

                <div class="accordion-faq">
                    <h3>Can employees access ESS login from the mobile application? <img src="{{ asset('assets/images/arrow-down.png') }}" class="arrow-up"></h3>
                    <div class="faq-content">
                        <p>Yes, it is very simple to access ESS with the Kasturi HR mobile application, allowing easy payroll log in for HR personnel and employees can simply download salary slip for respective months. Simply put, it is an all-in-one and one of the best HRMS portals in India.</p>
                    </div>
                </div>

                <div class="accordion-faq">
                    <h3>What is the purpose of an advanced Employee Self Service system? <img src="{{ asset('assets/images/arrow-down.png') }}" class="arrow-up"></h3>
                    <div class="faq-content">
                        <p>To shift the manual HR operations to automation and make employees do it rather than HR personnel. Since, HRs are majorly occupied with strategic tasks, including new company policy introduction. Therefore, the managed HR portal allows employees to do simple tasks themselves, like downloading salary slips, updating contact information, applying for leave, etc.</p>
                    </div>
                </div>

                <div class="accordion-faq">
                    <h3>How do employees make ESS log in? <img src="{{ asset('assets/images/arrow-down.png') }}" class="arrow-up"></h3>
                    <div class="faq-content">
                        <p>Open the Kasturi HR mobile application or web app, fill in the employee's official email address and password provided, and update the password if required; Kasturi HR is good to use. </p>
                    </div>
                </div>

                <div class="accordion-faq">
                    <h3>How do employees download salary slips on ESS portal login? <img src="{{ asset('assets/images/arrow-down.png') }}" class="arrow-up"></h3>
                    <div class="faq-content">
                        <p>It is easy to get salary slips with just a click. Simply, log-in to the Kasturi HR portal, go to the “payroll” option, and simply download the salary slip for the month you would like to.</p>
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
      "name": "Why is the Employee Self Service portal important for organizations?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "It reduces the administrative workload by allowing employees to update necessary details on the portal themselves. It reduces HR intervention, allowing them to focus on strategic tasks and fosters employee empowerment."
      }
    },
    {
      "@type": "Question",
      "name": "Can employees access ESS login from the mobile application?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, it is very simple to access ESS with the Kasturi HR mobile application, allowing easy payroll login for HR personnel and employees can simply download salary slip for respective months. Simply put, it is an all-in-one and one of the best HRMS portals in India."
      }
    },
    {
      "@type": "Question",
      "name": "What is the purpose of an advanced Employee Self Service system?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "To shift the manual HR operations to automation and make employees do it rather than HR personnel. Since HRs are majorly occupied with strategic tasks, including new company policy introduction. Therefore, the managed HR portal allows employees to do simple tasks themselves, like downloading salary slips, updating contact information, applying for leave, etc."
      }
    },
    {
      "@type": "Question",
      "name": "How do employees make ESS log in?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Open the Kasturi HR mobile application or web app, fill in the employee's official email address and password provided, and update the password if required; Kasturi HR is good to use."
      }
    },
    {
      "@type": "Question",
      "name": "How do employees download salary slips on ESS portal login?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "It is easy to get salary slips with just a click. Simply, log-in to the Kasturi HR portal, go to the “payroll” option, and simply download the salary slip for the month you would like to."
      }
    }
  ]
}
</script>
@endsection