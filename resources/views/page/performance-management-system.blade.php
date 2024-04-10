@extends('layouts.app')
@section('content')
    
<div class="features-page">
    <div class="features-listing">
        
        <div class="fix-it">
        <div class="features-tab active" onclick="location.href='{{ url('features/performance-management-system') }}'">
            <div class="icon"><img src="{{ asset('assets/images/icon-performance-management.png') }}" alt="Performance Management System"></div>
            <div class="content">
                <div class="heading">Performance Management System</div>
                <p>Monitor employee performance and simplify annual appraisal with ease.</p>
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
            <div class="sub-heading">Optimize performance with Kasturi HR</div>
            <h1>Comprehensive <span>Performance Management</span> System</h1>
            <p>Improve the work efficiency, transparency, and productivity of your team by assigning projects & tasks through Kasturi HR software. Work together, grow better, and scale higher with the top performance management tool.</p>
            <div class="button">
                <a data-fancybox data-src="#bookademo" href="javascript:;" class="btn-green button-green">Book a Demo</a>
            </div>
        </div>
        
        <div class="features-zig-zag-container">
            <div class="features-zig-zag">
                <div class="content">
                    <h2>Effective <span>Performance Management</span></h2>
                    <p>Kasturi HR enables managers and team leaders to effectively assign tasks to their respective teams and get updates. Management gets to know the status of the project in the description, ensuring productivity in all cases.</p>
                    <ul>
                        <li>Assign multiple tasks to teams</li>
                        <li>Provide project description</li>
                        <li>Update the team with the expected completion date</li>
                        <li>Check employee reports on the ongoing project</li>
                        <li>Provide feedback according to projects</li>
                    </ul>
                </div>
                <div class="thumb">
                    <img src="{{ asset('assets/images/thumb-Effective-Performance-Management.png') }}" alt="Effective Performance Management">
                </div>
            </div>
            
            <div class="features-zig-zag">
                <div class="content">
                    <h2>Evaluate <span>Performance</span></h2>
                    <p>Managers and superiors can easily align multiple tasks to individuals and teams with Kasturi HR, making performance evaluation easier and more helpful at the time of the annual HR appraisal system.</p>
                    <ul>
                        <li>Set performance metrics</li>
                        <li>Regular performance check-ins</li>
                        <li>Simplify employee appraisal software</li>
                        <li>Facilitated performance feedback</li>
                    </ul>
                </div>
                <div class="thumb">
                    <img src="{{ asset('assets/images/thumb-Evaluate-Performance.png') }}" alt="Evaluate Performance">
                </div>
            </div>
            
            <div class="features-zig-zag">
                <div class="content">
                    <h2><span>Real-time performance</span> update</h2>
                    <p>Employees get to update daily work reports on Kasturi HR performance management software, enabling management to evaluate productivity and employee performance. </p>
                    <ul>
                        <li>Easy to calculate work done</li>
                        <li>Real-time work report</li>
                        <li>Review tasks & provide feedback</li>
                        <li>Reduces month-end workload</li>
                    </ul>
                </div>
                <div class="thumb">
                    <img src="{{ asset('assets/images/thumb-Real-time-performance-update.png') }}" alt="Real-time performance update">
                </div>
            </div>
            
            <div class="features-zig-zag">
                <div class="content">
                    <h2><span>Check Reports</span> Anytime</h2>
                    <p>Employee performance management becomes simplified with the Kasturi HR system, enabling managers to get the work report on a daily, weekly, and monthly basis with the “filter” feature.</p>
                    <ul>
                        <li>Check project status anytime</li>
                        <li>Filter out previous work done</li>
                        <li>Edit timesheet when necessary</li>
                        <li>Review employee performance</li>
                    </ul>
                </div>
                <div class="thumb">
                    <img src="{{ asset('assets/images/thumb-check-reports.png') }}" alt="Check Reports Anytime">
                </div>
            </div>
        </div>
        
    </div>
</div>
    
<div class="banner-hr-system">
    <div class="container-fluid">
        <div class="banner-hr-system-row">
            <div class="content">
                <h2>Ease the <span>performance management process</span> with Kasturi HR</h2>
                <p>Make the most of India’s best employee performance management tool that fosters efficiency, productivity, transparency, and flexibility in your brand. Simply HR operations, project management, and HR appraisal system with Kasturi HR.</p>
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
                    <h3>What are the benefits of performance management software for companies? <img src="{{ asset('assets/images/arrow-down.png') }}" class="arrow-up"></h3>
                    <div class="faq-content">
                        <p>One of the best application performance monitoring tools, Kasturi HR enables managers to evaluate employee performance. It allows management to filter out the projects completed by individuals and accordingly review their performance, simplifying the annual appraisal process. </p>
                    </div>
                </div>

                <div class="accordion-faq">
                    <h3>What should be the key components of an application performance monitoring tool? <img src="{{ asset('assets/images/arrow-down.png') }}" class="arrow-up"></h3>
                    <div class="faq-content">
                        <p>A performance management system must have a daily work report update option for employees, and project management, including delegation of tasks, and update project status features for superiors, managers, and management. </p>
                    </div>
                </div>

                <div class="accordion-faq">
                    <h3>Why do HRMS management tools support performance evaluation features? <img src="{{ asset('assets/images/arrow-down.png') }}" class="arrow-up"></h3>
                    <div class="faq-content">
                        <p>Early-age startups have limited resources and prefer cost-cutting when required, therefore, they opt for HRMS tools that help them with evaluating performance and appraisal thereafter of employees. It enables efficiency as Kasturi HR is budget-friendly for early-age startups.</p>
                    </div>
                </div>

                <div class="accordion-faq">
                    <h3>Does the best employee appraisal management tool have a mobile app? <img src="{{ asset('assets/images/arrow-down.png') }}" class="arrow-up"></h3>
                    <div class="faq-content">
                        <p>Yes, Kasturi HR, the best HRMS software in India comes with a mobile application and can be accessed through the web, android, and iOS. The application enables performance management for managers and superiors, resulting in simplifying the annual appraisal process for all employees. </p>
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
      "name": "What are the benefits of performance management software for companies?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "One of the best application performance monitoring tools, Kasturi HR enables managers to evaluate employee performance. It allows management to filter out the projects completed by individuals and accordingly review their performance, simplifying the annual appraisal process."
      }
    },
    {
      "@type": "Question",
      "name": "What should be the key components of an application performance monitoring tool?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A performance management system must have a daily work report update option for employees, and project management, including delegation of tasks, and update project status features for superiors, managers, and management."
      }
    },
    {
      "@type": "Question",
      "name": "Why do HRMS management tools support performance evaluation features?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Early-age startups have limited resources and prefer cost-cutting when required, therefore, they opt for HRMS tools that help them with evaluating performance and appraisal thereafter of employees. It enables efficiency as Kasturi HR is budget-friendly for early-age startups."
      }
    },
    {
      "@type": "Question",
      "name": "Does the best employee appraisal management tool have a mobile app?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, Kasturi HR, the best HRMS software in India comes with a mobile application and can be accessed through the web, android, and iOS. The application enables performance management for managers and superiors, resulting in simplifying the annual appraisal process for all employees."
      }
    }
  ]
}
</script>
@endsection