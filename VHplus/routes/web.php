<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontOfficeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\ManufacturerController;
use App\Http\Controllers\WastageController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\AttendenceController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\AppsController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\BlankController;
use App\Http\Controllers\PagesController;

Route::get('/auth/login', [AuthController::class, 'showAuthLogin'])->name('auth/login');
Route::get('/auth/register', [AuthController::class, 'showAuthRegister'])->name('auth/register');
// Route::get('/frontOffice/index', [FrontOfficeController::class, 'showFrontOfficeIndex'])->name('frontOffice/index');
// Route::get('/frontOffice/index', [FrontOfficeController::class, 'showFrontOfficeIndex'])->name('frontOffice/index');
// Route::get('/frontOffice/about', [FrontOfficeController::class, 'showFrontOfficeAbout'])->name('frontOffice/about');
// Route::get('/frontOffice/service', [FrontOfficeController::class, 'showFrontOfficeService'])->name('frontOffice/service');
// Route::get('/frontOffice/price', [FrontOfficeController::class, 'showFrontOfficePrice'])->name('frontOffice/price');
// Route::get('/frontOffice/team', [FrontOfficeController::class, 'showFrontOfficeTeam'])->name('frontOffice/team');
// Route::get('/frontOffice/testimonial', [FrontOfficeController::class, 'showFrontOfficeTestimonial'])->name('frontOffice/testimonial');
// Route::get('/frontOffice/appointment', [FrontOfficeController::class, 'showFrontOfficeAppointment'])->name('frontOffice/appointment');
// Route::get('/frontOffice/contact', [FrontOfficeController::class, 'showFrontOfficeContact'])->name('frontOffice/contact');
Route::get('/index', [IndexController::class, 'showIndex'])->name('index');
Route::get('/hospital/user-profile', [HospitalController::class, 'showHospitalUserProfile'])->name('hospital/user-profile');
Route::get('/hospital/settings', [HospitalController::class, 'showHospitalSettings'])->name('hospital/settings');
Route::get('/hospital/settings-account-log', [HospitalController::class, 'showHospitalSettingsAccountLog'])->name('hospital/settings-account-log');
Route::get('/auth/logout', [AuthController::class, 'showAuthLogout'])->name('auth/logout');
Route::get('/hospital/doctor-nurse-add', [HospitalController::class, 'showHospitalDoctorNurseAdd'])->name('hospital/doctor-nurse-add');
Route::get('/hospital/invoice-details', [HospitalController::class, 'showHospitalInvoiceDetails'])->name('hospital/invoice-details');
Route::get('/hospital/invoice-list', [HospitalController::class, 'showHospitalInvoiceList'])->name('hospital/invoice-list');
Route::get('/hospital/invoice-print', [HospitalController::class, 'showHospitalInvoicePrint'])->name('hospital/invoice-print');
Route::get('/hospital/patient-add', [HospitalController::class, 'showHospitalPatientAdd'])->name('hospital/patient-add');
Route::get('/hospital/patient-profile', [HospitalController::class, 'showHospitalPatientProfile'])->name('hospital/patient-profile');
Route::get('/hospital/settings-member', [HospitalController::class, 'showHospitalSettingsMember'])->name('hospital/settings-member');
Route::get('/hospital/settings-email', [HospitalController::class, 'showHospitalSettingsEmail'])->name('hospital/settings-email');
Route::get('/hospital/settings-security', [HospitalController::class, 'showHospitalSettingsSecurity'])->name('hospital/settings-security');
Route::get('/customer-add', [CustomerController::class, 'showCustomerAdd'])->name('customer-add');
Route::get('/customer', [CustomerController::class, 'showCustomer'])->name('customer');
Route::get('/customer-ledger', [CustomerController::class, 'showCustomerLedger'])->name('customer-ledger');
Route::get('/medicine-add', [MedicineController::class, 'showMedicineAdd'])->name('medicine-add');
Route::get('/medicine-list', [MedicineController::class, 'showMedicineList'])->name('medicine-list');
Route::get('/medicine-details', [MedicineController::class, 'showMedicineDetails'])->name('medicine-details');
Route::get('/manufacturer', [ManufacturerController::class, 'showManufacturer'])->name('manufacturer');
Route::get('/manufacturer-ledger', [ManufacturerController::class, 'showManufacturerLedger'])->name('manufacturer-ledger');
Route::get('/wastage-return-add', [WastageController::class, 'showWastageReturnAdd'])->name('wastage-return-add');
Route::get('/wastage-return', [WastageController::class, 'showWastageReturn'])->name('wastage-return');
Route::get('/manufacturer-return-add', [ManufacturerController::class, 'showManufacturerReturnAdd'])->name('manufacturer-return-add');
Route::get('/manufacturer-return', [ManufacturerController::class, 'showManufacturerReturn'])->name('manufacturer-return');
Route::get('/member', [MemberController::class, 'showMember'])->name('member');
Route::get('/members-profile-regular', [MembersController::class, 'showMembersProfileRegular'])->name('members-profile-regular');
Route::get('/attendence', [AttendenceController::class, 'showAttendence'])->name('attendence');
Route::get('/salary', [SalaryController::class, 'showSalary'])->name('salary');
Route::get('/income-list', [IncomeController::class, 'showIncomeList'])->name('income-list');
Route::get('/expense-list', [ExpenseController::class, 'showExpenseList'])->name('expense-list');
Route::get('/invoice-list', [InvoiceController::class, 'showInvoiceList'])->name('invoice-list');
Route::get('/invoice-details', [InvoiceController::class, 'showInvoiceDetails'])->name('invoice-details');
Route::get('/sales-report', [SalesController::class, 'showSalesReport'])->name('sales-report');
Route::get('/purchase-report', [PurchaseController::class, 'showPurchaseReport'])->name('purchase-report');
Route::get('/stock-report', [StockController::class, 'showStockReport'])->name('stock-report');
Route::get('/support', [SupportController::class, 'showSupport'])->name('support');
Route::get('/general-settings', [GeneralController::class, 'showGeneralSettings'])->name('general-settings');
Route::get('/hospital/index', [HospitalController::class, 'showHospitalIndex'])->name('hospital/index');
Route::get('/hospital/appointment', [HospitalController::class, 'showHospitalAppointment'])->name('hospital/appointment');
Route::get('/hospital/patient-list', [HospitalController::class, 'showHospitalPatientList'])->name('hospital/patient-list');
Route::get('/hospital/doctor-nurse-list', [HospitalController::class, 'showHospitalDoctorNurseList'])->name('hospital/doctor-nurse-list');
Route::get('/hospital/income-list', [HospitalController::class, 'showHospitalIncomeList'])->name('hospital/income-list');
Route::get('/hospital/expense-list', [HospitalController::class, 'showHospitalExpenseList'])->name('hospital/expense-list');
Route::get('/hospital/birth-report', [HospitalController::class, 'showHospitalBirthReport'])->name('hospital/birth-report');
Route::get('/hospital/blood-bank', [HospitalController::class, 'showHospitalBloodBank'])->name('hospital/blood-bank');
Route::get('/hospital/inventory-items', [HospitalController::class, 'showHospitalInventoryItems'])->name('hospital/inventory-items');
Route::get('/hospital/bed-group', [HospitalController::class, 'showHospitalBedGroup'])->name('hospital/bed-group');
Route::get('/hospital/bed-allotment', [HospitalController::class, 'showHospitalBedAllotment'])->name('hospital/bed-allotment');
Route::get('/hospital/department', [HospitalController::class, 'showHospitalDepartment'])->name('hospital/department');
Route::get('/hospital/death-report', [HospitalController::class, 'showHospitalDeathReport'])->name('hospital/death-report');
Route::get('/index-ecommerce', [IndexController::class, 'showIndexEcommerce'])->name('index-ecommerce');
Route::get('/index-sales', [IndexController::class, 'showIndexSales'])->name('index-sales');
Route::get('/index-analytics', [IndexController::class, 'showIndexAnalytics'])->name('index-analytics');
Route::get('/apps-inbox', [AppsController::class, 'showAppsInbox'])->name('apps-inbox');
Route::get('/apps-messages', [AppsController::class, 'showAppsMessages'])->name('apps-messages');
Route::get('/apps-file-manager', [AppsController::class, 'showAppsFileManager'])->name('apps-file-manager');
Route::get('/apps-chats', [AppsController::class, 'showAppsChats'])->name('apps-chats');
Route::get('/apps-calendar', [AppsController::class, 'showAppsCalendar'])->name('apps-calendar');
Route::get('/apps-kanban', [AppsController::class, 'showAppsKanban'])->name('apps-kanban');
Route::get('/project-card', [ProjectController::class, 'showProjectCard'])->name('project-card');
Route::get('/project-list', [ProjectController::class, 'showProjectList'])->name('project-list');
Route::get('/user-list-regular', [UserController::class, 'showUserListRegular'])->name('user-list-regular');
Route::get('/user-list-compact', [UserController::class, 'showUserListCompact'])->name('user-list-compact');
Route::get('/user-details-regular', [UserController::class, 'showUserDetailsRegular'])->name('user-details-regular');
Route::get('/user-profile-regular', [UserController::class, 'showUserProfileRegular'])->name('user-profile-regular');
Route::get('/user-card', [UserController::class, 'showUserCard'])->name('user-card');
Route::get('/products', [ProductsController::class, 'showProducts'])->name('products');
Route::get('/orders-regular', [OrdersController::class, 'showOrdersRegular'])->name('orders-regular');
Route::get('/orders-sales', [OrdersController::class, 'showOrdersSales'])->name('orders-sales');
Route::get('/_blank', [BlankController::class, 'showBlank'])->name('_blank');
Route::get('/pages/faqs', [PagesController::class, 'showPagesFaqs'])->name('pages/faqs');
Route::get('/pages/terms-policy', [PagesController::class, 'showPagesTermsPolicy'])->name('pages/terms-policy');
Route::get('/pages/regular-v1', [PagesController::class, 'showPagesRegularV1'])->name('pages/regular-v1');
Route::get('/pages/regular-v2', [PagesController::class, 'showPagesRegularV2'])->name('pages/regular-v2');
Route::get('/pages/auths/auth-login', [PagesController::class, 'showPagesAuthsAuthLogin'])->name('pages/auths/auth-login');
Route::get('/pages/auths/auth-register', [PagesController::class, 'showPagesAuthsAuthRegister'])->name('pages/auths/auth-register');
Route::get('/pages/auths/auth-reset', [PagesController::class, 'showPagesAuthsAuthReset'])->name('pages/auths/auth-reset');
Route::get('/pages/auths/auth-success', [PagesController::class, 'showPagesAuthsAuthSuccess'])->name('pages/auths/auth-success');
Route::get('/pages/auths/auth-login-v2', [PagesController::class, 'showPagesAuthsAuthLoginV2'])->name('pages/auths/auth-login-v2');
Route::get('/pages/auths/auth-register-v2', [PagesController::class, 'showPagesAuthsAuthRegisterV2'])->name('pages/auths/auth-register-v2');
Route::get('/pages/auths/auth-reset-v2', [PagesController::class, 'showPagesAuthsAuthResetV2'])->name('pages/auths/auth-reset-v2');
Route::get('/pages/auths/auth-success-v2', [PagesController::class, 'showPagesAuthsAuthSuccessV2'])->name('pages/auths/auth-success-v2');
Route::get('/pages/auths/auth-login-v3', [PagesController::class, 'showPagesAuthsAuthLoginV3'])->name('pages/auths/auth-login-v3');
Route::get('/pages/auths/auth-register-v3', [PagesController::class, 'showPagesAuthsAuthRegisterV3'])->name('pages/auths/auth-register-v3');
Route::get('/pages/auths/auth-reset-v3', [PagesController::class, 'showPagesAuthsAuthResetV3'])->name('pages/auths/auth-reset-v3');
Route::get('/pages/auths/auth-success-v3', [PagesController::class, 'showPagesAuthsAuthSuccessV3'])->name('pages/auths/auth-success-v3');
Route::get('/pages/errors/404-classic', [PagesController::class, 'showPagesErrors404Classic'])->name('pages/errors/404-classic');
Route::get('/pages/errors/504-classic', [PagesController::class, 'showPagesErrors504Classic'])->name('pages/errors/504-classic');
Route::get('/pages/errors/404-s1', [PagesController::class, 'showPagesErrors404S1'])->name('pages/errors/404-s1');
Route::get('/pages/errors/504-s1', [PagesController::class, 'showPagesErrors504S1'])->name('pages/errors/504-s1');
Route::get('auth/forgot-password', [AuthController::class, 'showAuthForgotPassword'])->name('auth.forgot-password');
Route::get('password/reset/{token}', [AuthController::class, 'showResetForm'])->name('password.reset');
Route::get('auth/auth-success', [AuthController::class, 'authSuccess'])->name('auth/auth-success');
Route::get('/hospital/chat', [HospitalController::class, 'ShowHospitalChat'])->name('hospital/chat');
