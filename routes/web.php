<?php
  
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;  
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EnquiryController; 
use App\Http\Controllers\CompamyPlanController;
use App\Http\Controllers\Admin\UserController as User;  
use App\Http\Controllers\Admin\EnquiryController as Enquiry;
use App\Http\Controllers\Admin\CompanyController as Company;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\CustomerController as Customer;
use App\Http\Controllers\Admin\DashboardController as Dashboard;

 
Auth::routes();
  
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {  return view('home');});
Route::get('/about-us', function () { return view('page.about-us');});
Route::get('/appraisal', function () { return view('page.appraisal');});
Route::get('/attendance', function () { return view('page.attendance');});
Route::get('/claim', function () { return view('page.claim');});
Route::get('/company-profile', function () { return view('page.company-profile');});
Route::get('/employee', function () { return view('page.employee');});
Route::get('/faq', function () { return view('page.faq');});
Route::get('/leave', function () { return view('page.leave');});
Route::get('/how-it-works', function () { return view('page.how-it-work');});
Route::get('/career', function () { return view('page.career');});

Route::get('/terms-and-conditions', function () { return view('page.terms-and-conditions');});
Route::get('/privacy-policy', function () { return view('page.privacy-policy');});
Route::get('/mobile-privacy-policy', function () { return view('page.mobile-privacy-policy');});
Route::get('/gdpr', function () { return view('page.gdpr');});

Route::prefix('features')->group(function () {
    Route::get('/advanced-payroll-software', function () { return view('page.advanced-payroll-software');});
    Route::get('/time-and-attendance-management', function () { return view('page.time-and-attendance-management');});
    Route::get('/leave-management', function () { return view('page.leave-management');});
    Route::get('/performance-management-system', function () { return view('page.performance-management-system');});
    Route::get('/smart-hris-software', function () { return view('page.smart-hris-software');});
    Route::get('/employee-self-service', function () { return view('page.employee-self-service');});
});

Route::prefix('features/advanced-payroll-software')->group(function () {
    //Route::get('/tax-management', function () { return view('page.tax-management');});
    Route::get('/salary-structure', function () { return view('page.salary-structure');});
    Route::get('/statutory-compliance', function () { return view('page.statutory-compliance');});
    Route::get('/payslip-generator', function () { return view('page.payslip-generator');});
});

Route::prefix('features/smart-hris-software')->group(function () {
    Route::get('/hiring-and-onboarding', function () { return view('page.hiring-and-onboarding');});
});


Route::get('/pricing', function () { return view('page.pricing');});

Route::prefix('customer')->group(function () {
    Route::get('/register', [CustomerController::class, 'register'])->name('customer.register.form');
	Route::post('/register', [CustomerController::class, 'submitForm'])->name('customer-submit-register');
	Route::get('/find-company', [CustomerController::class, 'findCompany'])->name('customer.find.company');
	Route::post('/find-company', [CustomerController::class, 'getCompany'])->name('customer.submit.company.email'); 
});
Route::post('/plan', [CompamyPlanController::class, 'create'])->name('company.plan.save');
Route::get('/contact-us', [EnquiryController::class, 'contactForm'])->name('contact.form');
Route::post('/contact', [EnquiryController::class, 'submitForm'])->name('submit-enquiry');
Route::post('/book-demo', [EnquiryController::class, 'submitFormDemo'])->name('submit-enquiry-demo');
Route::post('/callback', [EnquiryController::class, 'submitFormCallback'])->name('submit-enquiry-callback');

Route::get('/unsubscribe', [HomeController::class, 'unsubscribe'])->name('unsubscribe');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
 
  
 
Route::get('/admin/login', function () { 
    return view('auth.login');
}); 

Route::get('/login', function(){ 
    return redirect()->route('mmx_login');
}); 
Route::get('mmx_login', [AuthenticatedSessionController::class, 'create'])->name('mmx_login'); 
Route::post('mmx_login', [AuthenticatedSessionController::class, 'store'])->name('mmx_login'); 
  
/*------------------------------------------ 
All Normal Users Routes List 
--------------------------------------------*/
Route::middleware(['auth', 'user-access:developer'])->group(function () {
   
    Route::get('/admin/dashbaord', [HomeController::class, 'adminDashbaord'])->name('admin.dashboard');
});
  
/*------------------------------------------ 
All Admin Routes List 
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {  
    Route::get('/admin/dashboard', [Dashboard::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/customers', [Customer::class, 'customers'])->name('admin.customers');
    Route::get('/admin/customer/ajaxdata', [Customer::class, 'customerAjaxData'])->name('admin.customer.ajaxdata');
    Route::get('/admin/company', [Company::class, 'index'])->name('admin.company');
    Route::get('/admin/export-customer', [Customer::class, 'exportCustomers'])->name('admin.export-customer');
    Route::get('/admin/company-plan/{id}', [Company::class, 'list'])->name('company.plan.list');
    Route::get('/admin/company-plan/edit/{id}', [Company::class, 'companyPlanEdit'])->name('admin.company-plan.edit');
    Route::get('/admin/export-company', [Company::class, 'exportCompanies'])->name('admin.export-company');
    Route::post('/admin/update-plan', [Company::class, 'updateCompanyPlan'])->name('admin.update.plan');
    Route::post('/admin/update/plan-details', [Company::class, 'updateCompanyPlanDetails'])->name('admin.update.plandetails');
    Route::get('/admin/users', [User::class, 'index'])->name('admin.users');
    Route::post('/admin/user/store', [User::class, 'store'])->name('admin.user.store');
    Route::get('/admin/add-user', [User::class, 'create'])->name('admin.add-user');
    Route::get('/admin/user/edit/{id}', [User::class, 'userEdit'])->name('admin.user.edit');
    Route::post('/admin/user/update', [User::class, 'userUpdate'])->name('admin.user.update');
    Route::post('enquiry-list', 'EnquiryController@list')->name('enquiry.list');
    Route::get('/admin/enquiry-reject', [Customer::class, 'rejectCustomer'])->name('admin.enquiry.reject'); 
    Route::post('enquiry-delete', 'EnquiryController@delete')->name('enquiry.delete');
    Route::get('admin/enquiry-status-send', [Customer::class,'sendStatus'])->name('admin.enquiry.status.send');
    Route::get('/logout', [HomeController::class, 'logout'])->name('logout  ');
});




/*------------------------------------------
Front route
------------------------------------------*/


