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
                    <li><a href="{{ url('features/smart-hris-software/hiring-and-onboarding') }}">Hiring & Onboarding</a></li>
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
            <div class="sub-heading">Simplify HR Operations</div>
            <h1><span>Smart HRIS</span> Software</h1>
            <p>Adapt to India’s best HRMS software that automates complex HR operations, fosters transparency, streamlines HR processes, manages employee performance, and more.</p>
            <div class="button">
                <a data-fancybox data-src="#bookademo" href="javascript:;" class="btn-green button-green">Book a Demo</a>
            </div>
        </div>
        
        <div class="features-zig-zag-container">
            <div class="features-zig-zag">
                <div class="content">
                    <h2><span>All-in-one</span> HR Management</h2>
                    <p>Kasturi HR simplifies HR management, streamlines core processes, empowers your teams, fosters transparency, and allows HR personnel and management make data-driven decisions regarding the employee life cycle. </p>
                    <ul>
                        <li>Work reports update</li>
                        <li>Manage projects & tasks</li>
                        <li>Recruitment & Onboarding</li>
                        <li>Payroll & salary management</li>
                        <li>Attendance & leave management</li>
                        <li>Resolve employee discrepancy issue</li>
                    </ul>
                </div>
                <div class="thumb">
                    <img src="{{ asset('assets/images/all-in-one-hr-management.png') }}" alt="All-in-one HR Management">
                </div>
            </div>
            
            <div class="features-zig-zag">
                <div class="content">
                    <h2><span>Performance Management</span> Software</h2>
                    <p>Improve productivity with team coordination through Kasturi HR, enabling managers to assign multiple tasks to teams, evaluate performance, and simplify employee annual appraisal system with work reports record.</p>
                    <ul>
                        <li>Add multiple tasks</li>
                        <li>Align individuals & teams</li>
                        <li>Review employee work reports</li>
                        <li>Reduce month-end work pressure</li>
                    </ul>
                </div>
                <div class="thumb">
                    <img src="{{ asset('assets/images/thumb-Performance-Management-software.png') }}" alt="Performance Management Software">
                </div>
            </div>
            
            <div class="features-zig-zag">
                <div class="content">
                    <h2><span>Advanced Payroll</span> Software</h2>
                    <p>Get smart and cloud based payroll software that ensures the payroll process becomes easier to execute with 100% transparency and accuracy.</p>
                    <ul>
                        <li>Move manual data to Kasturi HR</li>
                        <li>User-friendly payroll login</li>
                        <li>Adjust as per guidelines</li>
                        <li>Autopay salaries</li>
                        <li>Provide salary slips instantly</li>
                    </ul>
                </div>
                <div class="thumb">
                    <img src="{{ asset('assets/images/thumb-Advanced-Payroll-Software.png') }}" alt="Advanced Payroll Software">
                </div>
            </div>
            
            <div class="features-zig-zag">
                <div class="content">
                    <h2><span>Leave, Time, & Attendance</span> Management</h2>
                    <p>User-friendly dashboard to manage employee leaves, daily work hours with check-ins/ outs, and attendance reporting that helps effective team management.</p>
                    <ul>
                        <li>Approve/ reject employee leave</li>
                        <li>Manage leave discrepancies</li>
                        <li>Manage employee overtime</li>
                        <li>Facilitate updated payments</li>
                    </ul>
                </div>
                <div class="thumb">
                    <img src="{{ asset('assets/images/thumb-Leave-Time-attendance-Management.png') }}" alt="Leave, Time, & Attendance Management">
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
                    <h3>What is the reason for companies opting for cloud-based HRMS software? <img src="{{ asset('assets/images/arrow-down.png') }}" class="arrow-up"></h3>
                    <div class="faq-content">
                        <p>The all-in-one HR management software like Kasturi HR provides multiple features, including employee leave management, time & attendance tracking, encrypted data secured, advanced payroll processing, and a user-friendly dashboard that is easy to manage. </p>
                    </div>
                </div>

                <div class="accordion-faq">
                    <h3>How does advanced HRIS software benefit employees? <img src="{{ asset('assets/images/arrow-down.png') }}" class="arrow-up"></h3>
                    <div class="faq-content">
                        <p>Kasturi HR is an advanced HR software that allows employees to provide regular working reports to managers. The managed HR software records employee work performance, daily shit records, easily leave request submission, providing an option to raise concerns, ensuring complete transparency with the management. </p>
                    </div>
                </div>

                <div class="accordion-faq">
                    <h3>How to integrate HRMS software into your business website? <img src="{{ asset('assets/images/arrow-down.png') }}" class="arrow-up"></h3>
                    <div class="faq-content">
                        <p>Kasturi HR is simple to integrate with your business website. Visit the Kasturi HR website, click “sign up” and fill up the necessary details. Consultants will connect with you regarding your queries.</p>
                    </div>
                </div>

                <div class="accordion-faq">
                    <h3>Is there any application available on the Play Store or App Store? <img src="{{ asset('assets/images/arrow-down.png') }}" class="arrow-up"></h3>
                    <div class="faq-content">
                        <p>Yes, Kasturi HR can be accessed easily through the web, android, or iOS, the platform is widely accepted because of its effective features and benefits. </p>
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
      "name": "What is the reason for companies opting for cloud-based HRMS software?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The all-in-one HR management software like Kasturi HR provides multiple features, including employee leave management, time & attendance tracking, encrypted data secured, advanced payroll processing, and a user-friendly dashboard that is easy to manage."
      }
    },
    {
      "@type": "Question",
      "name": "How does advanced HRIS software benefit employees?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Kasturi HR is an advanced HR software that allows employees to provide regular working reports to managers. The managed HR software records employee work performance, daily shift records, easily leave request submission, providing an option to raise concerns, ensuring complete transparency with the management."
      }
    },
    {
      "@type": "Question",
      "name": "How to integrate HRMS software into your business website?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Kasturi HR is simple to integrate with your business website. Visit the Kasturi HR website, click 'sign up' and fill up the necessary details. Consultants will connect with you regarding your queries."
      }
    },
    {
      "@type": "Question",
      "name": "Is there any application available on the Play Store or App Store?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, Kasturi HR can be accessed easily through the web, android, or iOS, the platform is widely accepted because of its effective features and benefits."
      }
    }
  ]
}
</script>
@endsection