@extends('layouts.app')
@section('content')
    <section id="app-features-container" class="app-features-container">
        <div class="app-features-content">
            <div class="app-features-text">
                <h2>Take your experience<br>to the next level</h2>
                <p>Elevate your workforce management with our intuitive HR Management software. Streamline HR processes, empower staff, from onboarding to payroll, and drive organizational success. Simplify HR like never before.</p>
                <div class="app-download">
                    <a href="https://play.google.com/store/apps/details?id=com.kasturi.hr" target="_blank"><img src="{{ asset('assets/images/button-appstore.png') }}" alt="App store"></a>
                    <?php /*?><a href="#"><img src="<?=base_url()?>/public/images/button-googleplay.png" alt="Google play"></a><?php */ ?>
                </div>
            </div>
            <div class="app-features-thumb">
                <img src="{{ asset('assets/images/thumb-app-features.png') }}" alt="app features">

            </div>
        </div>
    </section>

    <section class="all-your-needs-container">
        <div class="heading">
            <h2>We've got all your needs<br> taken care of!</h2>
            <p>Revolutionizing Human Resource Management</p>
        </div>
        <div class="all-your-needs-row">
            
                <div class="all-needs-col">
                    <div class="icon">
                        <img src="{{ asset('assets/images/icon-company.svg') }}" alt="Company profile">
                    </div>
                    <h3>Company Profile</h3>
                    <p>Centralize and effectively manage your company's information, including all master data such as departments, designations, and bands.</p>
                </div>
            

            
                <div class="all-needs-col">
                    <div class="icon">
                        <img src="{{ asset('assets/images/icon-employees.svg') }}" alt="Employees">
                    </div>
                    <h3>Employee</h3>
                    <p>Streamline employee records and communication for efficient workforce management. Centralize all employee information in one place.</p>
                </div>
            

            
                <div class="all-needs-col">
                    <div class="icon">
                        <img src="{{ asset('assets/images/icon-timesheet.svg') }}" alt="Timesheet">
                    </div>
                    <h3>Timesheet</h3>
                    <p>Efficiently log and monitor work hours for project tracking and resource allocation. Managers have the option to take action on submitted timesheets.</p>
                </div>
            

            
                <div class="all-needs-col">
                    <div class="icon">
                        <img src="{{ asset('assets/images/icon-leaves.svg') }}" alt="Leaves">
                    </div>
                    <h3>Leaves</h3>
                    <p>Automate the leave request and approval process for smoother HR operations. Track leave balances and manage various leave types according to your company policy.</p>
                </div>
            

            
                <div class="all-needs-col">
                    <div class="icon">
                        <img src="{{ asset('assets/images/icon-attendance-new.svg') }}" alt="Attendance">
                    </div>
                    <h3>Attendance</h3>
                    <p>Seamlessly track attendance, ensuring accurate and timely data. Includes the option to manage holiday calendars for different locations.</p>
                </div>
            

            
                <div class="all-needs-col">
                    <div class="icon">
                        <img src="{{ asset('assets/images/icon-appraisal.svg') }}" alt="Appraisal">
                    </div>
                    <h3>Appraisal</h3>
                    <p>Conduct structured performance assessments, setting and tracking goals transparently. Track the evaluation process for every action by employees or managers.</p>
                </div>
            

            
                <div class="all-needs-col">
                    <div class="icon">
                        <img src="{{ asset('assets/images/icon-projects.svg') }}" alt="Projects">
                    </div>
                    <h3>Projects & Clients</h3>
                    <p>Enhance project management by tracking progress, resources, and client interactions in a unified system.</p>
                </div>
            

            
                <div class="all-needs-col">
                    <div class="icon">
                        <img src="{{ asset('assets/images/icon-travel-claim.svg') }}" alt="Claim">
                    </div>
                    <h3>Claim</h3>
                    <p>Efficiently manage various employee claims through a centralized system. Employees can raise reimbursement requests for multiple types in one place.</p>
                </div>
            

            
                <div class="all-needs-col">
                    <div class="icon">
                        <img src="{{ asset('assets/images/icon-payroll.svg') }}" alt="Payroll">
                    </div>
                    <h3>Payroll</h3>
                    <p>Integrate payroll processes for accurate and compliant salary management. Generate pay slips with a breakdown of different salary components for employees.</p>
                </div>
            
        </div>
    </section>

    <section class="security-section-container">
        <div class="security-content">
            <h2>Your Security is Our Priority!</h2>
            <p>All data in our HRMS is encrypted and protected to ensure the confidentiality and integrity of your sensitive information.</p>
        </div>
    </section>

    <section id="hrms-system-container" class="hrms-system-container">
        <div class="hrms-system">
            <div class="hrms-thumb">
                <img src="{{ asset('assets/images/mobile-screen-bg 1.png') }}" alt="">
            </div>
            <div class="hrms-content">
                <span class="small-heading">HR SYSTEMS</span>
                <h2>We offer Desktop and Mobile-native experience for your employees.</h2>
                <p>Your employees expect mobile access to their most-used apps. Why should it be different for HR?</p>
                <button type="button" data-fancybox data-src="#callback" class="btn btn-green">GET A CALL BACK</button>
            </div>
        </div>
    </section>


    <section class="faq-container">
        <div class="faqs">
            <h2>Frequently Asked Questions</h2>

            <div class="faq">
                <div class="accordion-faq">
                    <h3>What is Kasturi HR, and how does it enhance Company Profile Management? <img src="{{ asset('assets/images/arrow-down.png') }}" class="arrow-up"></h3>
                    <div class="faq-content">
                        <p>Kasturi HR is a comprehensive HRMS solution. It streamlines Company Profile Management by centralizing data, allowing easy updates, and ensuring accurate representation of your organization's profile.</p>
                    </div>
                </div>

                <div class="accordion-faq">
                    <h3>How does Kasturi HR facilitate Efficient Employee Management? <img src="{{ asset('assets/images/arrow-down.png') }}" class="arrow-up"></h3>
                    <div class="faq-content">
                        <p>Kasturi HR simplifies Employee Management through a user-friendly interface. It enables HR professionals to handle employee records, monitor performance, and streamline communication efficiently.</p>
                    </div>
                </div>

                <div class="accordion-faq">
                    <h3>Can Kasturi HR help in Attendance Management? <img src="{{ asset('assets/images/arrow-down.png') }}" class="arrow-up"></h3>
                    <div class="faq-content">
                        <p>Absolutely. Kasturi HR offers an Effective Attendance Management system that tracks employee attendance, leaves, and generates insightful reports. This aids in better workforce management.</p>
                    </div>
                </div>

                <div class="accordion-faq">
                    <h3>How does Kasturi HR handle Leaves Management effectively? <img src="{{ asset('assets/images/arrow-down.png') }}" class="arrow-up"></h3>
                    <div class="faq-content">
                        <p>Kasturi HR automates the Leave Management process, allowing employees to request leaves, managers to approve, and HR to maintain accurate records. This ensures a smooth workflow for leave-related activities.</p>
                    </div>
                </div>

                <div class="accordion-faq">
                    <h3>Does Kasturi HR support Timesheet Management? <img src="{{ asset('assets/images/arrow-down.png') }}" class="arrow-up"></h3>
                    <div class="faq-content">
                        <p>Yes, Kasturi HR provides an Effective Timesheet Management feature that allows employees to log their work hours, aiding in project tracking and resource allocation.</p>
                    </div>
                </div>

                <div class="accordion-faq">
                    <h3>Can Kasturi HR manage “Work From Home” efficiently? <img src="{{ asset('assets/images/arrow-down.png') }}" class="arrow-up"></h3>
                    <div class="faq-content">
                        <p>Indeed. Kasturi HR streamlines “Work From Home” Management by providing a platform for employees to request remote work, ensuring seamless communication, and tracking productivity.</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="view-all-faqs">
            <a href="faq" class="btn-green">VIEW ALL FAQS</a>
        </div>
    </section>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is Kasturi HR, and how does it enhance Company Profile Management?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Kasturi HR is a comprehensive HRMS solution. It streamlines Company Profile Management by centralizing data, allowing easy updates, and ensuring accurate representation of your organization's profile."
          }
        },
        {
          "@type": "Question",
          "name": "How does Kasturi HR facilitate Efficient Employee Management?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Kasturi HR simplifies Employee Management through a user-friendly interface. It enables HR professionals to handle employee records, monitor performance, and streamline communication efficiently."
          }
        },
        {
          "@type": "Question",
          "name": "Can Kasturi HR help in Attendance Management?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Absolutely. Kasturi HR offers an Effective Attendance Management system that tracks employee attendance, leaves, and generates insightful reports. This aids in better workforce management."
          }
        },
        {
          "@type": "Question",
          "name": "How does Kasturi HR handle Leaves Management effectively?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Kasturi HR automates the Leave Management process, allowing employees to request leaves, managers to approve, and HR to maintain accurate records. This ensures a smooth workflow for leave-related activities."
          }
        },
        {
          "@type": "Question",
          "name": "Does Kasturi HR support Timesheet Management?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, Kasturi HR provides an Effective Timesheet Management feature that allows employees to log their work hours, aiding in project tracking and resource allocation."
          }
        },
        {
          "@type": "Question",
          "name": "Can Kasturi HR manage “Work From Home” efficiently?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Indeed. Kasturi HR streamlines “Work From Home” Management by providing a platform for employees to request remote work, ensuring seamless communication, and tracking productivity."
          }
        }
      ]
    }
    </script>

@endsection