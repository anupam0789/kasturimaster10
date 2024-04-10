@extends('layouts.app')
@section('content')
    
<div class="features-page">
    <div class="features-listing">
        
        <div class="fix-it">
        <div class="features-tab active" onclick="location.href='{{ url('features/leave-management') }}'">
            <div class="icon"><img src="{{ asset('assets/images/icon-leave-management.png') }}" alt="Leave Management"></div>
            <div class="content">
                <div class="heading">Leave Management</div>
                <p>Approve/ reject employee leave and provide status of requested leaves.</p>
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
            <div class="sub-heading">Simplify leave process</div>
            <h1>Advanced <span>Leave Management</span> Software</h1>
            <p>Say no to complex spreadsheets and endless emails for leave approvals. Kasturi HR is an advanced HRMS leave management platform that enables ease at work for HRs and employees, enabling transparency with the overall leave management process. </p>
            <div class="button">
                <a data-fancybox data-src="#bookademo" href="javascript:;" class="btn-green button-green">Book a Demo</a>
            </div>
        </div>
        
        <div class="features-zig-zag-container">
            <div class="features-zig-zag">
                <div class="content">
                    <h2>Streamlined <span>Leave Management</span></h2>
                    <p>Kasturi HR enables HR personnel to manage employee leave requests, transparency with the workforce, and ensure compliance with company policies.</p>
                    <ul>
                        <li>Check leave balance</li>
                        <li>Easy leave submission</li>
                        <li>Manage leave discrepancies</li>
                        <li>Review/ approve leave requests</li>
                        <li>Multiple leave types, casual, sick, etc</li>
                        <li>Facilitate leave payments</li>
                    </ul>
                </div>
                <div class="thumb">
                    <img src="{{ asset('assets/images/thumb-streamlined-leave-management.png') }}" alt="Streamlined Leave Management">
                </div>
            </div>
            
            <div class="features-zig-zag">
                <div class="content">
                    <h2><span>Reduced Complexity</span> for HR Personnel</h2>
                    <p>Instant dashboards provide a quick overview of employee leave status. Easy leave management with tracking leave balance, quickly generating reports, streamlining approvals & manager’s reviews, and reducing administrative workload.</p>
                    <ul>
                        <li>Instant HRMS leave management dashboard</li>
                        <li>Get quick updates/ reviews</li>
                        <li>Simplify month-end processes</li>
                        <li>Track leave payment record</li>
                    </ul>
                </div>
                <div class="thumb">
                    <img src="{{ asset('assets/images/thumb-Reduced-Complexity-for-HR Personnel.png') }}" alt="Reduced Complexity for HR Personnel">
                </div>
            </div>
            
            <div class="features-zig-zag">
                <div class="content">
                    <h2><span>Flexible Leave Policy</span> Management</h2>
                    <p>With smart attendance and leave management software, HR personnel could easily update company policy and upload it to the Kasturi HR portal, providing real-time data to all employees.</p>
                    <ul>
                        <li>Edit and upload company policies</li>
                        <li>Accessibility to policies for all employees</li>
                        <li>Transparency with leave management </li>
                        <li>User-friendly dashboard for all</li>
                    </ul>
                </div>
                <div class="thumb">
                    <img src="{{ asset('assets/images/thumb-Flexible-Leave-Policy-Management.png') }}" alt="Flexible Leave Policy Management">
                </div>
            </div>
            
            <div class="features-zig-zag">
                <div class="content">
                    <h2><span>Resolve dependencies</span> at work</h2>
                    <p>Manage employee leave, ensuring teammates and managers of specific departments know the days off of their colleagues through the Kasturi HR HRMS leave application, resolving chaos at the eleventh hour.</p>
                    <ul>
                        <li>Feedback on leave submission</li>
                        <li>Instant updates to teammates</li>
                        <li>No adverse impact on productivity</li>
                        <li>Team management & coordination</li>
                    </ul>
                </div>
                <div class="thumb">
                    <img src="{{ asset('assets/images/thumb-Resolve-dependencies-at-work.png') }}" alt="Resolve dependencies at work">
                </div>
            </div>
        </div>
        
    </div>
</div>
    
<div class="banner-hr-system">
    <div class="container-fluid">
        <div class="banner-hr-system-row">
            <div class="content">
                <h2><span>Cloud-based</span> Convenience</h2>
                <p>The cloud-based leave management system ensures HR operations become effortless, providing convenience to HR personnel and employees of your company with no need to manage processes manually. </p>
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
                    <h3>What is the HRMS leave application system? <img src="{{ asset('assets/images/arrow-down.png') }}" class="arrow-up"></h3>
                    <div class="faq-content">
                        <p>Kasturi HR is an advanced HRMS software that makes the leave management process easier for HR personnel. It helps companies to manage days off of their workforce without hampering the overall work productivity. </p>
                    </div>
                </div>

                <div class="accordion-faq">
                    <h3>What is the benefit of a management leave application for companies? <img src="{{ asset('assets/images/arrow-down.png') }}" class="arrow-up"></h3>
                    <div class="faq-content">
                        <p>Significance comes when customized HRMS like Kasturi HR enhances productivity, and transparency among the workforce, and reduces complex HR operations with automated features and real-time updates.</p>
                    </div>
                </div>

                <div class="accordion-faq">
                    <h3>What are the major features of the HRMS leave management system? <img src="{{ asset('assets/images/arrow-down.png') }}" class="arrow-up"></h3>
                    <div class="faq-content">
                        <p>The major features include easy submission of days off requests, real-time updates from managers & HR personnel, easy to approve/ reject, employees having updates on their colleagues’ upcoming days off for no chaos at work, and improved efficiency. And guess what? Kasturi HR has it all.</p>
                    </div>
                </div>

                <div class="accordion-faq">
                    <h3>Is it easier to update leave-related policies in the portal? <img src="{{ asset('assets/images/arrow-down.png') }}" class="arrow-up"></h3>
                    <div class="faq-content">
                        <p>Not only the company leave policy, but every other policy and guideline for employees can be easily updated on the portal. The Kasturi HR portal allows employees to know recent updates in company policy, and work according to the guidelines.</p>
                    </div>
                </div>

                <div class="accordion-faq">
                    <h3>Is there an app for leave management? <img src="{{ asset('assets/images/arrow-down.png') }}" class="arrow-up"></h3>
                    <div class="faq-content">
                        <p>Yes, you can download the Kasturi HR app on your Android or iPhone, and make the most of the application with the ease of managing your leaves, leave balance, etc.</p>
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
      "name": "What is the HRMS leave application system?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Kasturi HR is an advanced HRMS software that makes the leave management process easier for HR personnel. It helps companies to manage days off of their workforce without hampering the overall work productivity."
      }
    },
    {
      "@type": "Question",
      "name": "What is the benefit of a management leave application for companies?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Significance comes when customized HRMS like Kasturi HR enhances productivity, and transparency among the workforce, and reduces complex HR operations with automated features and real-time updates."
      }
    },
    {
      "@type": "Question",
      "name": "What are the major features of the HRMS leave management system?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The major features include easy submission of days off requests, real-time updates from managers & HR personnel, easy to approve/ reject, employees having updates on their colleagues’ upcoming days off for no chaos at work, and improved efficiency. And guess what? Kasturi HR has it all."
      }
    },
    {
      "@type": "Question",
      "name": "Is it easier to update leave-related policies in the portal?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Not only the company leave policy, but every other policy and guideline for employees can be easily updated on the portal. The Kasturi HR portal allows employees to know recent updates in company policy, and work according to the guidelines."
      }
    },
    {
      "@type": "Question",
      "name": "Is there an app for leave management?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, you can download the Kasturi HR app on your Android or iPhone, and make the most of the application with the ease of managing your leaves, leave balance, etc."
      }
    }
  ]
}
</script>
@endsection