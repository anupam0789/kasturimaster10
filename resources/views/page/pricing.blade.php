@extends('layouts.app')
@section('content')

<div class="banner-style banner-style-1">
    <div class="banner-content">
        <h1>Simple and affordable pricing</h1>
        <p>60 days free trial. No credit card required.</p>
    </div>    
</div>
    
<div class="pricing-container">
    <div class="pricing-data">
        <table id="tbl-top" class="tbl-top" border="0" cellpadding="0" cellspacing="0" width="100%">
            <tr>
                <td width="49%">&nbsp;</td>
                <td width="17%">
                    <div class="pricing-plan plan-foundational">
                        <h2>Foundational</h2>
                        <p>** <span class="material-icons-outlined">currency_rupee</span> 40/user/month</p>
                        <a data-fancybox data-src="#bookademo" href="javascript:;">Book a Demo</a>
                    </div>
                </td>
                <td width="17%">
                    <div class="pricing-plan plan-professional">
                        <h2>Professional</h2>
                        <p>** <span class="material-icons-outlined">currency_rupee</span> 50/user/month</p>
                        <a data-fancybox data-src="#bookademo" href="javascript:;">Book a Demo</a>
                    </div>
                </td>
                <td width="17%">
                    <div class="pricing-plan plan-advanced">
                        <h2>Advanced</h2>
                        <p>** <span class="material-icons-outlined">currency_rupee</span> 60/user/month</p>
                        <a data-fancybox data-src="#bookademo" href="javascript:;">Book a Demo</a>
                    </div>
                </td>
            </tr>
        </table>
        
        <table class="tbl-bottom" cellpadding="0" cellspacing="0" width="100%">
            <tr class="hideit">
                <td width="49%">&nbsp;</td>
                <td width="17%">
                    <div class="pricing-plan plan-foundational">
                        <h2>Foundational</h2>
                        <p>** <span class="material-icons-outlined">currency_rupee</span> 40/user/month</p>
                        <a data-fancybox data-src="#bookademo" href="javascript:;">Book a Demo</a>
                    </div>
                </td>
                <td width="17%">
                    <div class="pricing-plan plan-professional">
                        <h2>Professional</h2>
                        <p>** <span class="material-icons-outlined">currency_rupee</span> 50/user/month</p>
                        <a data-fancybox data-src="#bookademo" href="javascript:;">Book a Demo</a>
                    </div>
                </td>
                <td width="17%">
                    <div class="pricing-plan plan-advanced">
                        <h2>Advanced</h2>
                        <p>** <span class="material-icons-outlined">currency_rupee</span> 60/user/month</p>
                        <a data-fancybox data-src="#bookademo" href="javascript:;">Book a Demo</a>
                    </div>
                </td>
            </tr>
            <tr>
                <th colspan="4">Dashboard</th>
            </tr>
            <tr>
                <td width="49%">Announcements</td>
                <td width="17%" align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td width="17%" align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td width="17%" align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            <tr>
                <td>Employee Leave Balance</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            <tr>
                <td>Check-in, Break & Check-out</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            <tr>
                <td>Employee of the Month</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-no.png') }}" alt="no"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            <tr>
                <td>Pending Approvals & Analytics</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-no.png') }}" alt="no"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-no.png') }}" alt="no"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            <tr>
                <td>Reminders & Alerts</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            <tr>
                <td>Sign-in Using Email</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            <tr>
                <td>Sign-in Using Employee Code</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-no.png') }}" alt="no"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-no.png') }}" alt="no"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            <tr>
                <td>Upcoming Birthdays</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-no.png') }}" alt="no"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            <tr>
                <td>Upcoming Holidays</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            <tr>
                <td>Upcoming Leaves</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-no.png') }}" alt="no"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            <tr>
                <td>User Role Toggle</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            <tr>
                <td>Company Offers</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            <tr>
                <td>Upcoming WFH</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-no.png') }}" alt="no"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            
            <tr>
                <th colspan="4" style="border-radius: 0">Employee Management</th>
            </tr>
            <tr>
                <td>Automated Birthday Greetings</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-no.png') }}" alt="no"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            <tr>
                <td>Automated Wedding Anniversary Greetings</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-no.png') }}" alt="no"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-no.png') }}" alt="no"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            <tr>
                <td>Automated Work Anniversary Greetings</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-no.png') }}" alt="no"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            <tr>
                <td>Company Work History Management</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-no.png') }}" alt="no"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            <tr>
                <td>Education & Family Details</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            <tr>
                <td>Employee Probation Cycle</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            <tr>
                <td>Employee Data Export to Excel</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            <tr>
                <td>Employee Data Import from Excel</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            <tr>
                <td>Employee Database Management</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            <tr>
                <td>Employee Documents</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            <tr>
                <td>Employee Self Service (ESS)</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            <tr>
                <td>Employee Shift Details</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-no.png') }}" alt="no"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-no.png') }}" alt="no"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            <tr>
                <td>Employee Social Media</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            
            <tr>
                <td>Extensive Employee Search</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            <tr>
                <td>Induction & Exit Management</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            
            <tr>
                <td>Mobile Application (Android)</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-no.png') }}" alt="no"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            <tr>
                <td>Skill Set Matrix</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-no.png') }}" alt="no"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            <tr>
                <td>Work Experience Management</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            
            <tr>
                <th colspan="4" style="border-radius: 0">Company Profile Management</th>
            </tr>
            
            <tr>
                <td>Company Locations</td>
                <td align="center" valign="middle">2</td>
                <td align="center" valign="middle">4</td>
                <td align="center" valign="middle">Unlimited</td>
            </tr>
            <tr>
                <td>Company Policy Documents</td>
                <td align="center" valign="middle">2</td>
                <td align="center" valign="middle">5</td>
                <td align="center" valign="middle">Unlimited</td>
            </tr>
            <tr>
                <td>Email Signatures</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-no.png') }}" alt="no"></td>
                <td align="center" valign="middle">1</td>
                <td align="center" valign="middle">5</td>
            </tr>
            <tr>
                <td>Helpdesk/Support</td>
                <td align="center" valign="middle">Email</td>
                <td align="center" valign="middle">Email & Chat</td>
                <td align="center" valign="middle">Email, Chat & Phone</td>
            </tr>
            <tr>
                <td>Manage Announcements</td>
                <td align="center" valign="middle">2</td>
                <td align="center" valign="middle">5</td>
                <td align="center" valign="middle">Unlimited</td>
            </tr>
            <tr>
                <td>Manage Departments</td>
                <td align="center" valign="middle">10</td>
                <td align="center" valign="middle">20</td>
                <td align="center" valign="middle">Unlimited</td>
            </tr>
            <tr>
                <td>Manage Designations with Band</td>
                <td align="center" valign="middle">20</td>
                <td align="center" valign="middle">40</td>
                <td align="center" valign="middle">Unlimited</td>
            </tr>
            <tr>
                <td>Manage Employee of the Month</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-no.png') }}" alt="no"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            <tr>
                <td>Manage Master Data</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-no.png') }}" alt="no"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            <tr>
                <td>Manage Offers</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-no.png') }}" alt="no"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            <tr>
                <td>Statutory Details</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            
            <tr>
                <th colspan="4" style="border-radius: 0">Timesheet Management</th>
            </tr>
            <tr>
                <td>Comp-off Management</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-no.png') }}" alt="no"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            <tr>
                <td>Daily Work Report Tracking</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            
            <tr>
                <th colspan="4" style="border-radius: 0">Leave Management</th>
            </tr>
            
            <tr>
                <td>Apply Leave Requests</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            <tr>
                <td>Add Attachments To Leave Requests</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-no.png') }}" alt="no"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            <tr>
                <td>Leave Approval Reminder</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-no.png') }}" alt="no"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            <tr>
                <td>Leave Automatic Accrual</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            <tr>
                <td>Leave Automatic Carryover</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            <tr>
                <td>Leave Balance Report</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            <tr>
                <td>Leave History Management</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            <tr>
                <td>Manage Leave Type Master</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-no.png') }}" alt="no"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            <tr>
                <td>Manage Loyalty Leaves</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-no.png') }}" alt="no"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            <tr>
                <th colspan="4" style="border-radius: 0">WFH Management</th>
            </tr>
            <tr>
                <td>Apply WFH Requests</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-no.png') }}" alt="no"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            <tr>
                <td>WFH Approval Reminder</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-no.png') }}" alt="no"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            <tr>
                <td>WFH History Management</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-no.png') }}" alt="no"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            
            <tr>
                <th colspan="4" style="border-radius: 0">Attendance Management</th>
            </tr>
            
            <tr>
                <td>Daily Attendance Marking</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            <tr>
                <td>GEO Fencing Attendance</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-no.png') }}" alt="no"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            <tr>
                <td>IP Restriction Attendance</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-no.png') }}" alt="no"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            <tr>
                <td>Holiday Calendar</td>
                <td align="center" valign="middle">1</td>
                <td align="center" valign="middle">3</td>
                <td align="center" valign="middle">Unlimited</td>
            </tr>
            <tr>
                <td>Manage Discrepency & Approvals</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-no.png') }}" alt="no"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            
            <tr>
                <th colspan="4" style="border-radius: 0">Projects</th>
            </tr>
            
            <tr>
                <td>Assign/Unassign Project to Employees</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            <tr>
                <td>Manage Projects Status</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            <tr>
                <td>Add Projects</td>
                <td align="center" valign="middle">10</td>
                <td align="center" valign="middle">20</td>
                <td align="center" valign="middle">Unlimited</td>
            </tr>
            
            <tr>
                <th colspan="4" style="border-radius: 0">Clients</th>
            </tr>
            
            <tr>
                <td>Manage Clients Status</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            <tr>
                <td>View Client's Projects</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            <tr>
                <td>Add Clients</td>
                <td align="center" valign="middle">10</td>
                <td align="center" valign="middle">20</td>
                <td align="center" valign="middle">Unlimited</td>
            </tr>
            
            <tr>
                <th colspan="4" style="border-radius: 0">Appraisal Management</th>
            </tr>
            
            <tr>
                <td>Manage Master SMART KRAs</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-no.png') }}" alt="no"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            <tr>
                <td>Multi Layer Review</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-no.png') }}" alt="no"></td>
                <td align="center" valign="middle">2</td>
                <td align="center" valign="middle">Unlimited</td>
            </tr>
            <tr>
                <td>Performance Review</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-no.png') }}" alt="no"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            <tr>
                <td>Self Appraisals</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-no.png') }}" alt="no"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            <tr>
                <td>SMART KRA and Goals Settings</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-no.png') }}" alt="no"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            
            <tr>
                <th colspan="4" style="border-radius: 0">Expense Management</th>
            </tr>
            
            <tr>
                <td>Approve Exceptional Expenses</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            <tr>
                <td>General Claims</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            <tr>
                <td>Tag Projects with the Expenses</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-no.png') }}" alt="no"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            <tr>
                <td>Travel Claims</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-no.png') }}" alt="no"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            <tr>
                <td>Travel Requests</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-no.png') }}" alt="no"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            
            <tr>
                <th colspan="4" style="border-radius: 0;position: static">Payroll</th>
            </tr>
            
            <tr>
                <td>Automated Payroll Processing</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            <tr>
                <td>F&F Settlements with workflow</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            <tr>
                <td>Download Salary Slips</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            <tr>
                <td>Reimbursements Payouts</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            <tr>
                <td>Salary Structure Configuration</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            <tr>
                <td>Statutory Compliance</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            <tr>
                <td>Variable Payout</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            <tr>
                <td>Default Salary Structure</td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
                <td align="center" valign="middle"><img src="{{ asset('assets/images/icon-yes.png') }}" alt="yes"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td align="center" valign="middle"><a data-fancybox data-src="#bookademo" href="javascript:;" class="btn-green">Book a Demo</a></td>
                <td align="center" valign="middle"><a data-fancybox data-src="#bookademo" href="javascript:;" class="btn-green">Book a Demo</a></td>
                <td align="center" valign="middle"><a data-fancybox data-src="#bookademo" href="javascript:;" class="btn-green">Book a Demo</a></td>
            </tr>
        </table>
        
        
    </div>  
    <div class="note">
            <p>** Billed annually with minimum <strong>25 users</strong> and up to 100 users | Trial Period <strong>3 Months</strong></p>
        </div>
</div>
<script>
const btnScrollToTop = document.querySelector("#tbl-top");

// scroll to top of page when button clicked
/*btnScrollToTop.addEventListener("click", e => {
  window.scrollTo({
    top: 0,
    left: 0,
    behavior: "smooth"
  });
});*/

// toggle 'scroll to top' based on scroll position
window.addEventListener('scroll', e => {
  //btnScrollToTop.style.display = window.scrollY > 5500 ? 'none' : 'inline-block';
 
});
    
$(window).scroll(function(){
var sticky=$('.tbl-bottom th'),scroll=$(window).scrollTop();
if(scroll>=5300)sticky.addClass('no-more-sticky');
else sticky.removeClass('no-more-sticky');});
</script>
@endsection