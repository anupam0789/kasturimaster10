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
            <h1>Advanced <span>Payroll Software</span></h1>
            <p>No more manual payroll. Get smart HRMS software to simplify your payroll workload. With 100% transparency, Kasturi HR makes the payroll process easier than ever before.</p>
            <div class="button">
                <a data-fancybox data-src="#bookademo" href="javascript:;" class="btn-green button-green">Book a Demo</a>
            </div>
        </div>
        
        <div class="features-zig-zag-container">
            <div class="features-zig-zag">
                <div class="content">
                    <h2>Streamlined <span>Payroll Processing</span></h2>
                    <p>HR personnel get to easily prepare payroll for employees to ensure the process goes well as per the company’s guidelines. </p>
                    <ul>
                        <li>Review & approve timesheets</li>
                        <li>Manage discrepancies</li>
                        <li>Update employee tax withholdings </li>
                        <li>Initiate & run payroll review</li>
                        <li>Approve calculated payroll</li>
                        <li>Process Payments</li>
                    </ul>
                </div>
                <div class="thumb">
                    <img src="{{ asset('assets/images/thumb-Streamlined-Payroll-Processing-01.png') }}" alt="Streamlined Payroll Processing">
                </div>
            </div>
            
            <?php /*?><div class="features-zig-zag">
                <div class="content">
                    <h2>Effortless <span>Onboarding</span></h2>
                    <p>Facilitate enhanced internal communications by providing all current employees info at-the-go. Portray the relationships between every department and employees within a company.</p>
                    
                    <div class="features-highlight">
                        <div class="f-box">
                            <div class="icon">
                                <span class="material-icons-outlined">save</span>
                            </div>
                            <h3>Data<br> storage</h3>
                        </div>
                        
                        <div class="f-box">
                            <div class="icon">
                                <span class="material-icons-outlined">inventory</span>
                            </div>
                            <h3>Automated<br> tax</h3>
                        </div>
                        
                        <div class="f-box">
                            <div class="icon">
                                <span class="material-icons-outlined">task_alt</span>
                            </div>
                            <h3>Compliance<br> check</h3>
                        </div>
                    </div>
                    
                    <h3>Manage Time</h3>
                    <ul>
                        <li>Check working hours</li>
                        <li>Attendance</li>
                        <li>Check-ins/ outs</li>
                    </ul>
                    
                    <h3>Manage Leave</h3>
                    <ul>
                        <li>Transparency</li>
                        <li>Tracking</li>
                        <li>Approve/ Reject</li>
                    </ul>
                    
                    <h3>Accurate Payroll</h3>
                    <ul>
                        <li>Initiate</li>
                        <li>Run</li>
                        <li>Review</li>
                    </ul>
                </div>
                <div class="thumb">
                    <img src="{{ asset('assets/images/thumb-effortless-onboarding.png') }}" alt="Effortless onboarding">
                </div>
            </div><?php */?>
            
            <div class="features-zig-zag">
                <div class="content">
                    <h2>Improved <span>Data Security</span></h2>
                    <p>No more need to worry about payroll data getting lost. Kasturi HR HRMS supports advanced encryption technologies and safeguards the data of employees and the company.</p>
                    <ul>
                        <li>Supports multi-layered data security</li>
                        <li>Automatic backups</li>
                        <li>Handles month-end stress</li>
                        <li>Simple to track payment records</li>
                    </ul>
                </div>
                <div class="thumb">
                    <img src="{{ asset('assets/images/thumb-improved-data-security.png') }}" alt="Improved Data Security">
                </div>
            </div>
            
            <div class="features-zig-zag">
                <div class="content">
                    <h2>Make <span>Salary Revisions</span></h2>
                    <p>Onboard new members & update revised salaries for existing employees with advanced payroll management software, Kasturi HR. Make timely updates and accurate calculations with ease. </p>
                    <ul>
                        <li>Move manual data to Kasturi HR</li>
                        <li>Make necessary adjustments</li>
                        <li>Update salaries in the dashboard</li>
                        <li>Let employees get salary slips with a click</li>
                    </ul>
                </div>
                <div class="thumb">
                    <img src="{{ asset('assets/images/thumb-salary-revisions.png') }}" alt="Make Salary Revisions">
                </div>
            </div>
            
            <div class="features-zig-zag">
                <div class="content">
                    <h2>Real-time <span>Claim Updates</span></h2>
                    <p>Make faster, easier, and real-time changes/ updates to reimbursements, travel expenses, and business trip claims, that further get adjusted to employees’ salaries. </p>
                    <ul>
                        <li>Travel claim</li>
                        <li>Business trip expenses</li>
                        <li>View approvals/ updates</li>
                    </ul>
                </div>
                <div class="thumb">
                    <img src="{{ asset('assets/images/thumb-claim-updates.png') }}" alt="Real-time Claim Updates">
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
                    <h3>What is a payroll management software? <img src="{{ asset('assets/images/arrow-down.png') }}" class="arrow-up"></h3>
                    <div class="faq-content">
                        <p>Payroll management system software simplifies and automates the complex HR process, including salary, deductions, and tax management. The software allows companies to get accurate paychecks, generate payroll reports, store overall data, and reduce stress at last. </p>
                    </div>
                </div>

                <div class="accordion-faq">
                    <h3>What is the benefit of cloud based payroll software? <img src="{{ asset('assets/images/arrow-down.png') }}" class="arrow-up"></h3>
                    <div class="faq-content">
                        <p>The advanced payroll software provides accessibility, flexibility, and real-time updates. It ensures the payroll process is manageable from any time & anywhere. Additionally, startups need not require manual processes or spreadsheets to store data, ensuring security and cost reduction in HR operations.</p>
                    </div>
                </div>

                <div class="accordion-faq">
                    <h3>Why should Kasturi HR be my HRMS solution for payroll management? <img src="{{ asset('assets/images/arrow-down.png') }}" class="arrow-up"></h3>
                    <div class="faq-content">
                        <p>With robust security, ensured flexibility, and advanced payroll management, Kasturi HR enables a smooth shift from manual processes to automation. It saves time, cost, and resources, and fosters transparency among the workforce.</p>
                    </div>
                </div>

                <div class="accordion-faq">
                    <h3>How does it benefit employees? <img src="{{ asset('assets/images/arrow-down.png') }}" class="arrow-up"></h3>
                    <div class="faq-content">
                        <p>Employees get multiple benefits, including management of projects, daily work reports, attendance, check-ins/ outs, raising discrepancies related to working hours, on-time salary slips, and travel claims & reimbursements. </p>
                    </div>
                </div>

                <div class="accordion-faq">
                    <h3>How does an HRMS help startups and organizations? <img src="{{ asset('assets/images/arrow-down.png') }}" class="arrow-up"></h3>
                    <div class="faq-content">
                        <p>Organizations get to monitor the working hours, days off, employee life cycle, and smoother payroll processes. Besides, Kasturi HR is one of the best employee task management software in India, ensuring organizations get productivity, transparency, and ease in their daily operations.</p>
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
      "name": "What is a payroll management software?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Payroll management system software simplifies and automates the complex HR process, including salary, deductions, and tax management. The software allows companies to get accurate paychecks, generate payroll reports, store overall data, and reduce stress at last."
      }
    },
    {
      "@type": "Question",
      "name": "What is the benefit of cloud-based payroll software?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The advanced payroll software provides accessibility, flexibility, and real-time updates. It ensures the payroll process is manageable from any time & anywhere. Additionally, startups need not require manual processes or spreadsheets to store data, ensuring security and cost reduction in HR operations."
      }
    },
    {
      "@type": "Question",
      "name": "Why should Kasturi HR be my HRMS solution for payroll management?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "With robust security, ensured flexibility, and advanced payroll management, Kasturi HR enables a smooth shift from manual processes to automation. It saves time, cost, and resources, and fosters transparency among the workforce."
      }
    },
    {
      "@type": "Question",
      "name": "How does it benefit employees?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Employees get multiple benefits, including management of projects, daily work reports, attendance, check-ins/outs, raising discrepancies related to working hours, on-time salary slips, and travel claims & reimbursements."
      }
    },
    {
      "@type": "Question",
      "name": "How does an HRMS help startups and organizations?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Organizations get to monitor the working hours, days off, employee life cycle, and smoother payroll processes. Besides, Kasturi HR is one of the best employee task management software in India, ensuring organizations get productivity, transparency, and ease in their daily operations."
      }
    }
  ]
}
</script>
@endsection