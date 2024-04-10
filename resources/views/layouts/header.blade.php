<header id="header-main" class="header-main">
    <div class="logo">
        <a href="/"><img src="{{ asset('assets/images/logo.png') }}" alt="{{ config('app.name', 'HRMS') }}"></a>
    </div>
    <div class="header-right">
        <div class="menu">
            <div class="menu-close"><a href="javascript:void(0)">X</a></div>
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('about-us') }}">About us</a></li>
                <li><a href="{{ url('features/advanced-payroll-software') }}">Features <span class="material-icons-outlined">keyboard_arrow_down</span></a>
                    <ul class="level1">
                        <li><a href="{{ url('features/advanced-payroll-software') }}">Advanced Payroll Software <span class="material-icons-outlined">navigate_next</span></a>
                            <ul class="level2">
                                <?php /*?><li><a href="{{ url('features/advanced-payroll-software/tax-management') }}">Tax Management</a></li><?php */?>
                                <li><a href="{{ url('features/advanced-payroll-software/salary-structure') }}">Salary Structure</a></li>
                                <li><a href="{{ url('features/advanced-payroll-software/statutory-compliance') }}">Statutory Compliance</a></li>
                                <li><a href="{{ url('features/advanced-payroll-software/payslip-generator') }}">Payslip Generator</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url('features/time-and-attendance-management') }}">Time & Attendance Management</a></li>
                        <li><a href="{{ url('features/leave-management') }}">Leave Management</a></li>
                        <li><a href="{{ url('features/performance-management-system') }}">Performance Management System</a></li>
                        <li><a href="{{ url('features/smart-hris-software') }}">Smart HRIS Software <span class="material-icons-outlined">navigate_next</span></a>
                            <ul class="level2">
                                <li><a href="{{ url('features/smart-hris-software/hiring-and-onboarding') }}">Hiring & Onboarding</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url('features/employee-self-service') }}">Employee Self Service</a></li>
                    </ul>
                </li>
                
                <li><a href="{{ url('pricing') }}">Pricing</a></li>
                <li><a href="{{ url('how-it-works') }}">How it works</a></li>
                <li><a href="javascript:;">Resources <span class="material-icons-outlined">keyboard_arrow_down</span></a>
                    <ul class="level1">
                        <li><a href="{{ url('blog') }}">Blog</a></li>
                    </ul>
                </li>
                <li><a href="{{ url('career') }}">Career</a></li>
                <li><a href="{{ url('contact-us') }}">Contact us</a></li>
            </ul>
        </div>
        <div class="get-quote-btn">
            <a href="{{ url('customer/register') }}">Sign up</a>
            <a href="{{ url('customer/find-company') }}">Sign in</a>
            <a href="#" class="mobile-menu-trigger"><span class="material-icons-outlined">menu</span></a>
        </div>
    </div>
    <div class="menu-overlay"></div>
    <div class="mobile-menu" style="display: none">
        <div id="navbar-main" class="navbar-main mobile-menu-show">
            <div class="menu-close"><a href="javascript:void(0)">X</a></div>
            <div>
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('about-us') }}">About us</a></li>
                    <li class="has-child"><a href="{{ url('features/advanced-payroll-software') }}">Features</a>
                    <ul class="level1">
                        <li><a href="{{ url('features/advanced-payroll-software') }}">Advanced Payroll Software <span class="material-icons-outlined">navigate_next</span></a>
                            <ul class="level2">
                                <?php /*?><li><a href="{{ url('features/advanced-payroll-software/tax-management') }}">Tax Management</a></li><?php */?>
                                <li><a href="{{ url('features/advanced-payroll-software/salary-structure') }}">Salary Structure</a></li>
                                <li><a href="{{ url('features/advanced-payroll-software/statutory-compliance') }}">Statutory Compliance</a></li>
                                <li><a href="{{ url('features/advanced-payroll-software/payslip-generator') }}">Payslip Generator</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url('features/time-and-attendance-management') }}">Time & Attendance Management</a></li>
                        <li><a href="{{ url('features/leave-management') }}">Leave Management</a></li>
                        <li><a href="{{ url('features/performance-management-system') }}">Performance Management System</a></li>
                        <li><a href="{{ url('features/smart-hris-software') }}">Smart HRIS Software <span class="material-icons-outlined">navigate_next</span></a>
                            <ul class="level2">
                                <li><a href="{{ url('features/smart-hris-software/hiring-and-onboarding') }}">Hiring & Onboarding</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url('features/employee-self-service') }}">Employee Self Service</a></li>
                    </ul>
                </li>
                    <li><a href="{{ url('pricing') }}">Pricing</a></li>
                    <li><a href="{{ url('how-it-works') }}">How it works</a></li>
                    <li class="has-child"><a href="{{ url('pricing') }}">Resources</a>
                    <ul class="level1">
                        <li><a href="{{ url('blog') }}">Blog</a></li>
                    </ul>
                    </li>
                    <li><a href="{{ url('career') }}">Career</a></li>
                    <li><a href="{{ url('contact-us') }}">Contact us</a></li>
                    <li><a href="{{ url('customer/register') }}">Sign up</a></li>
                    <li><a href="{{ url('customer/find-company') }}">Sign in</a></li>
                    
                </ul>
            </div>
        </div>
    </div>
</header>