@extends('layouts.app')
@section('content')
    
<div class="features-page">
    <div class="features-listing">
        
        <div class="fix-it">
        <div class="features-tab active" onclick="location.href='{{ url('features/time-and-attendance-management') }}'">
            <div class="icon"><img src="{{ asset('assets/images/icon-attendance-management.png') }}" alt="Time & Attendance Management"></div>
            <div class="content">
                <div class="heading">Time & Attendance Management</div>
                <p>Calculate employee working hours, overtime & short time done effortlessly.</p>
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
            <div class="sub-heading">Automate Your Workforce Tracking</div>
            <h1><span>Time & Attendance</span> Management</h1>
            <p>No more manual attendance tracking. Boost your workforce management with advanced attendance and leave management software. Work efficiently with streamlined process, enhanced accuracy, and ensured compliance. </p>
            <div class="button">
                <a data-fancybox data-src="#bookademo" href="javascript:;" class="btn-green button-green">Book a Demo</a>
            </div>
        </div>
        
        <div class="features-zig-zag-container">
            <div class="features-zig-zag">
                <div class="content">
                    <h2>Effortless <span>Workforce Tracking</span></h2>
                    <p>Kasturi HR, advanced attendance management software simplifies the monitoring of employee working hours, day breaks, and work reports as per the company’s guidelines.</p>
                    <ul>
                        <li>Check-in/ Check-out</li>
                        <li>Track day breaks</li>
                        <li>Regularize attendance</li>
                        <li>Manage employee overtime</li>
                        <li>Review timesheets</li>
                    </ul>
                </div>
                <div class="thumb">
                    <img src="{{ asset('assets/images/thumb-Effortless-Workforce-Tracking.png') }}" alt="Effortless Workforce Tracking">
                </div>
            </div>
            
            <div class="features-zig-zag">
                <div class="content">
                    <h2>Smart <span>Leave Management</span></h2>
                    <p>Manage leave requests in real-time with Kasturi HR’s user-friendly interface. Create efficiency in every HR process with complete transparency, including the manager’s remarks on employee leave requests.</p>
                    <ul>
                        <li>Request and approval of leaves</li>
                        <li>Check and update leave balance</li>
                        <li>Integrate attendance record</li>
                        <li>Provide detailed leave reviews</li>
                    </ul>
                </div>
                <div class="thumb">
                    <img src="{{ asset('assets/images/thumb-smart-leave-management.png') }}" alt="Smart Leave Management">
                </div>
            </div>
            
            <div class="features-zig-zag">
                <div class="content">
                    <h2>Enhanced <span>Data Security</span></h2>
                    <p>Ensure to have a secured platform for data privacy of employees’ details. Our attendance and payroll software enables advanced encryption technologies, and auto backups to save data, ensuring the protection of every sensitive information.</p>
                    <ul>
                        <li>Multi-layered data security</li>
                        <li>Automated backups</li>
                        <li>Protected against unauthorized access</li>
                    </ul>
                </div>
                <div class="thumb">
                    <img src="{{ asset('assets/images/thumb-enhanced-data-security.png') }}" alt="Enhanced Data Security">
                </div>
            </div>
            
            <div class="features-zig-zag">
                <div class="content">
                    <h2>Boost Productivity with <span>Real-time Insights</span></h2>
                    <p>Get real-time updates on employees' leave requests, approve in real-time, make informed decisions, and manage staffing at all levels, ensuring effective teamwork and productivity. </p>
                    <ul>
                        <li>Attendance dashboard</li>
                        <li>Provide reviews instantly</li>
                        <li>Update reports</li>
                    </ul>
                </div>
                <div class="thumb">
                    <img src="{{ asset('assets/images/thumb-real-time-insight.png') }}" alt="Boost Productivity with Real-time Insights">
                </div>
            </div>
        </div>
        
    </div>
</div>
    
<div class="banner-hr-system">
    <div class="container-fluid">
        <div class="banner-hr-system-row">
            <div class="content">
                <h2>Get Instant <span>Work Notifications</span></h2>
                <p>Make yourself updated with reviews and updates with management’s remarks on employee leave requests, discrepancies raised, and working hours, fostering transparency with the best HRMS software in India.</p>
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
                    <h3>What is Time & Attendance Management software? <img src="{{ asset('assets/images/arrow-down.png') }}" class="arrow-up"></h3>
                    <div class="faq-content">
                        <p>Smart time and attendance management system software like Kasturi HR enables auto tracking of employee working hours, regular breaks, and leaves. It helps organizations to accurately adjust salaries, smooth the payroll process, and necessary adjustments. </p>
                    </div>
                </div>

                <div class="accordion-faq">
                    <h3>Why choose employee time tracking software? <img src="{{ asset('assets/images/arrow-down.png') }}" class="arrow-up"></h3>
                    <div class="faq-content">
                        <p>Kasturi HR enables a seamless and secure way to monitor employee attendance, regardless of the company size. It ensures every HR personnel gets complete employee details, making no confusion at the time of payroll.</p>
                    </div>
                </div>

                <div class="accordion-faq">
                    <h3>How does it benefit employees? <img src="{{ asset('assets/images/arrow-down.png') }}" class="arrow-up"></h3>
                    <div class="faq-content">
                        <p>Employees get complete updates regarding their applied leaves, manager’s review, leave balance to manage future leaves, records work reports on a daily basis, etc. It empowers them to manage time effectively.</p>
                    </div>
                </div>

                <div class="accordion-faq">
                    <h3>How is HR software beneficial for organizations? <img src="{{ asset('assets/images/arrow-down.png') }}" class="arrow-up"></h3>
                    <div class="faq-content">
                        <p>As already mentioned the effectiveness of Kasturi HR, the best HRMS software in India, automates and simplifies HR operations. It becomes useful to effectively shift manual processes to automation. </p>
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
      "name": "What is Time & Attendance Management software?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Smart time and attendance management system software like Kasturi HR enables auto-tracking of employee working hours, regular breaks, and leaves. It helps organizations to accurately adjust salaries, smooth the payroll process, and make necessary adjustments."
      }
    },
    {
      "@type": "Question",
      "name": "Why choose employee time tracking software?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Kasturi HR enables a seamless and secure way to monitor employee attendance, regardless of the company size. It ensures every HR personnel gets complete employee details, making no confusion at the time of payroll."
      }
    },
    {
      "@type": "Question",
      "name": "How does it benefit employees?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Employees get complete updates regarding their applied leaves, manager’s review, leave balance to manage future leaves, records work reports on a daily basis, etc. It empowers them to manage time effectively."
      }
    },
    {
      "@type": "Question",
      "name": "How is HR software beneficial for organizations?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "As already mentioned the effectiveness of Kasturi HR, the best HRMS software in India, automates and simplifies HR operations. It becomes useful to effectively shift manual processes to automation."
      }
    }
  ]
}
</script>
@endsection