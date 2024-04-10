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
                    <li><a class="active" href="{{ url('features/advanced-payroll-software/salary-structure') }}">Salary Structure</a></li>
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
            <div class="sub-heading">Ensure Accuracy</div>
            <h1>Advanced <span>Salary Management</span></h1>
            <p>Get the best payroll management software with a user-friendly interface and advanced salary management system. Kasturi HR performs accurately at generating employee payroll with secured cloud measures.</p>
            <div class="button">
                <a data-fancybox data-src="#bookademo" href="javascript:;" class="btn-green button-green">Book a Demo</a>
            </div>
        </div>
        
        <div class="features-zig-zag-container">
            <div class="features-zig-zag">
                <div class="content">
                    <h2>Effective <span>Salary Structure</span></h2>
                    <p>Get your early-age startup an advanced performance management software that provides flexible features to manage employee salary adjustments.</p>
                    <ul>
                        <li>Define employee basic pay</li>
                        <li>Provide allowance details</li>
                        <li>Resolve payment discrepancies</li>
                        <li>Provide brief breakdowns</li>
                    </ul>
                </div>
                <div class="thumb">
                    <img src="{{ asset('assets/images/thumb-Effective-Salary-Structure.png') }}" alt="Effective Salary Structure">
                </div>
            </div>
            
           
            <div class="features-zig-zag">
                <div class="content">
                    <h2><span>Foster Transparency</span> at All Levels</h2>
                    <p>The Kasturi HR and management tool ensures transparency of the salary structure that the company follows with employees. </p>
                    <ul>
                        <li>Employee access pay slips</li>
                        <li>Get detailed breakdowns</li>
                        <li>Form data-driven decision </li>
                        <li>Streamlines workflows</li>
                    </ul>
                </div>
                <div class="thumb">
                    <img src="{{ asset('assets/images/thumb-Foster-Transparency-at-All-Levels.png') }}" alt="Foster Transparency at All Levels">
                </div>
            </div>
            
            <div class="features-zig-zag">
                <div class="content">
                    <h2><span>Filter out</span> the Data</h2>
                    <p>Another significance of using employee payroll management software is that HR personnel can filter out the data to adjust salaries. Data can be filtered out based on multiple allowances, travel expenses, extra earnings, etc.</p>
                    <ul>
                        <li>Make necessary changes</li>
                        <li>Update salary</li>
                        <li>Initiate & process payments</li>
                        <li>Filter out as per requirements</li>
                    </ul>
                </div>
                <div class="thumb">
                    <img src="{{ asset('assets/images/thumb-Filter-out-the-Data.png') }}" alt="Filter out the Data">
                </div>
            </div>
            
            <div class="features-zig-zag">
                <div class="content">
                    <h2><span>Check Claim</span> Descriptions</h2>
                    <p>It becomes easier for HR personnel to adjust employee salaries with the “claim” feature. With this, they get complete updates on employee travel visits, expenses done, reasons to claim reimbursements, etc, preventing conflicts at last.</p>
                    <ul>
                        <li>Check claim amount</li>
                        <li>Get claim description</li>
                        <li>Approve/ reject claims</li>
                        <li>Store data effortlessly</li>
                    </ul>
                </div>
                <div class="thumb">
                    <img src="{{ asset('assets/images/thumb-Check-Claim-Descriptions.png') }}" alt="Check Claim Descriptions">
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
                    <h3>Can employees track their salary slips for specific months? <img src="{{ asset('assets/images/arrow-down.png') }}" class="arrow-up"></h3>
                    <div class="faq-content">
                        <p>Kasturi HR is one of the preferred cloud based payroll software in India. It allows employees to download salary slip for any month considering their employee life cycle. With a simple click, employees get their salary slips with brief amount breakdowns.</p>
                    </div>
                </div>

                <div class="accordion-faq">
                    <h3>Can Kasturi HR management software give salary briefs? <img src="{{ asset('assets/images/arrow-down.png') }}" class="arrow-up"></h3>
                    <div class="faq-content">
                        <p>For the admin panel, it is much easier to access multiple options in the “payroll” tab. Additionally, it provides complete breakdowns of employee salaries, including incentives for overtime, travel claims, multiple allowances, FnF details, and many more. It simplifies HR operations, ensuring reduced workload and stress. </p>
                    </div>
                </div>

                <div class="accordion-faq">
                    <h3>Does the managed HR payroll software provide flexibility for the payroll process? <img src="{{ asset('assets/images/arrow-down.png') }}" class="arrow-up"></h3>
                    <div class="faq-content">
                        <p>Yes, Kasturi HR is advanced and cloud based payroll software in India that is completely flexible and easy to use. It ensures that HR personnel get to update payrolls and automate them with necessary edits, as per company guidelines.</p>
                    </div>
                </div>

                <div class="accordion-faq">
                    <h3>How can I get to know more about Kasturi HRMS software for business? <img src="{{ asset('assets/images/arrow-down.png') }}" class="arrow-up"></h3>
                    <div class="faq-content">
                        <p>You can either fill up the form attached on the Kasturi HR website or simply visit <a href="#">https://kasturihr.com/customer/register</a> for any query. </p>
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
      "name": "Can employees track their salary slips for specific months?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Kasturi HR is one of the preferred cloud-based payroll software in India. It allows employees to download salary slips for any month considering their employee life cycle. With a simple click, employees get their salary slips with brief amount breakdowns."
      }
    },
    {
      "@type": "Question",
      "name": "Can Kasturi HR management software give salary briefs?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "For the admin panel, it is much easier to access multiple options in the 'payroll' tab. Additionally, it provides complete breakdowns of employee salaries, including incentives for overtime, travel claims, multiple allowances, FnF details, and many more. It simplifies HR operations, ensuring reduced workload and stress."
      }
    },
    {
      "@type": "Question",
      "name": "Does the managed HR payroll software provide flexibility for the payroll process?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, Kasturi HR is advanced and cloud-based payroll software in India that is completely flexible and easy to use. It ensures that HR personnel get to update payrolls and automate them with necessary edits, as per company guidelines."
      }
    },
    {
      "@type": "Question",
      "name": "How can I get to know more about Kasturi HRMS software for business?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "You can either fill up the form attached on the Kasturi HR website or simply visit https://kasturihr.com/customer/register for any query."
      }
    }
  ]
}
</script>
@endsection