<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ForgotPasswordController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// verify mail
Route::get('/verify_email/{id}', [MainController::class, 'verify_mail']);

// main urls
Route::get('/', [MainController::class, 'index']);
Route::get('/about_us', [MainController::class, 'about_us']);
Route::get('/individual_taxes', [MainController::class, 'individual_taxes']);
Route::get('/business_taxes', [MainController::class, 'business_taxes']);
Route::get('/indian_tax_filing', [MainController::class, 'indian_tax_filing']);
Route::get('/data_security', [MainController::class, 'data_security']);
Route::get('/refund_status', [MainController::class, 'refund_status']);
Route::get('/contact_us', [MainController::class, 'contact_us']);
Route::get('/view_all_services', [MainController::class, 'view_all_services']);
Route::get('/refer_friend', [MainController::class, 'refer_friend']);
Route::get('/Perfect_tax_planning_stratagies_for_high_tax_refunds', [MainController::class, 'Perfect_tax_planning_stratagies_for_high_tax_refunds']);
Route::get('/free_filing_of_tax_returns', [MainController::class, 'free_filing_of_tax_returns']);
Route::get('/genuine_high_refunds_tax_estimate', [MainController::class, 'genuine_high_refunds_tax_estimate']);
Route::get('/numerous_tax_consultations', [MainController::class, 'numerous_tax_consultations']);
Route::get('/guaranteed_accurate_tax_returns', [MainController::class, 'guaranteed_accurate_tax_returns']);
Route::get('/tax_planing_for_current_year_and_next_year', [MainController::class, 'tax_planing_for_current_year_and_next_year']);
Route::get('/evalution_of_tax_returns', [MainController::class, 'evalution_of_tax_returns']);
Route::get('/ITIN_application', [MainController::class, 'ITIN_application']);
Route::get('/FBAR_and_FATCA', [MainController::class, 'FBAR_and_FATCA']);
Route::get('/seeking_extension_of_time_to_file_tax_returns', [MainController::class, 'seeking_extension_of_time_to_file_tax_returns']);
Route::get('/full_support_for_audits_notices', [MainController::class, 'full_support_for_audits_notices']);
Route::get('/refund_support_for_withheld_of_FICA', [MainController::class, 'refund_support_for_withheld_of_FICA']);
Route::get('/customer_support', [MainController::class, 'customer_support']);
Route::get('/guaranteed_genuine_high_tax_returns', [MainController::class, 'guaranteed_genuine_high_tax_returns']);
Route::get('/confidentiality_data_security', [MainController::class, 'confidentiality_data_security']);
Route::get('/tax_return_storage_facility', [MainController::class, 'tax_return_storage_facility']);
Route::get('/data_protection_on_tax_return', [MainController::class, 'data_protection_on_tax_return']);
Route::get('/full_satisfaction_gurantee', [MainController::class, 'full_satisfaction_gurantee']);
Route::get('/Accuracy_guarantee', [MainController::class, 'Accuracy_guarantee']);
Route::get('/audit_support_for_new_clients_on_previous_tax', [MainController::class, 'audit_support_for_new_clients_on_previous_tax']);
Route::get('/privacy_guarantee', [MainController::class, 'privacy_guarantee']);
Route::get('/business_incorporation_consultation', [MainController::class, 'business_incorporation_consultation']);
Route::get('/business_incorporation', [MainController::class, 'business_incorporation']);
Route::get('/business_tax_filing', [Maincontroller::class, 'business_tax_filing']);
Route::get('/audit_support_for_irs', [Maincontroller::class, 'audit_support_for_irs']);
Route::get('/state_audit', [Maincontroller::class, 'state_audit']);
Route::get('/terms_conditions', [Maincontroller::class, 'terms_conditions']);
// forget password
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

// login & Register
Route::post('/register', [LoginController::class, 'register']);
Route::post('/login', [LoginController::class, 'login']);

// user Routes
Route::middleware(['afterlogin'])->group(function () {
    Route::get('/edit_profile',[UserController::class,'edit_profile']);
    Route::get('/users_dashboard', [UserController::class, 'index']);
    Route::get('/tax_filing', [UserController::class, 'tax_filing']);
    Route::get('/Referrals', [UserController::class, 'Referrals']);
    Route::get('/Messages', [UserController::class, 'Messages']);
    Route::get('/Settings', [UserController::class, 'Settings']);
    Route::get('/tax_filing/bankdetails', [UserController::class, 'bankdetails']);
    Route::get('/tax_filing/incomeinf', [UserController::class, 'incomeinf']);
    Route::get('/tax_filing/spuosedoc', [UserController::class, 'spuosedoc']);
    Route::get('/tax_filing/taxsummary', [UserController::class, 'taxsummary']);
    Route::get('/delete_income_doc/{id}', [UserController::class, 'delete_income_doc']);
    Route::get('/delete_spouse_doc/{id}', [UserController::class, 'delete_spouse_doc']);
    Route::get('/delete_one_income_doc/{name}/{dbname}', [UserController::class, 'delete_one_income_doc']);
    Route::get('/delete_one_spouse_doc/{name}/{dbname}', [UserController::class, 'delete_one_spouse_doc']);
    Route::get('/Referrals/myrefferals',[UserController::class,'myrefferals']);
    Route::get('/Messages/inbox',[UserController::class,'inbox']);
    Route::get('/Messages/sent',[UserController::class,'sent']);
    Route::get('/Messages/compose',[UserController::class,'compose']);

    // form posts
    Route::post('/edit_profile',[UserController::class,'edit_profile_post']);
    Route::post('/change_password',[UserController::class,'change_password']);

    Route::post('/basic_info', [UserController::class, 'basic_info']);
    Route::post('/bank_details', [UserController::class, 'bank_details']);
    Route::post('/upload_doc', [UserController::class, 'upload_doc']);
    Route::post('/upload_spouse_doc', [UserController::class, 'upload_spouse_doc']);
    Route::post('/addreferrals',[UserController::class,'addreferrals']);
    Route::post('/Messages/compose',[UserController::class,'compose_post']);


});

// admin routes
Route::middleware(['admincheck'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/send_email/{id}', [MainController::class, 'send_mail']);
    Route::get('/view_user/{id}', [AdminController::class, 'view_user']);
    Route::get('/edit_user/{id}', [AdminController::class, 'edit_user']);
    Route::post('/tax_payer_edit/{id}',[AdminController::class,'tax_payer_edit']);
    Route::post('/income_edit/{id}',[AdminController::class,'income_edit']);
    Route::post('/spouse_edit/{id}',[AdminController::class,'spouse_edit']);
    Route::post('/bank_edit/{id}',[AdminController::class,'bank_edit']);
    Route::get('/view/message/{id}', [AdminController::class, 'view_messages']);
    Route::post('/reply/{id}', [AdminController::class, 'reply']);
    Route::post('/compose', [AdminController::class, 'compose']);
    Route::get('/delete_user/{id}', [AdminController::class, 'delete_user']);
    // data tables
    Route::get('dtactiveclients', [AdminController::class, 'activeclients_ajax'])->name('datatables.activeclients');
    Route::get('dtinactiveclients', [AdminController::class, 'inactiveclients_ajax'])->name('datatables.inactiveclients');
    Route::get('dtmessages', [AdminController::class, 'messages_ajax'])->name('datatables.messages');

    Route::get('dttotalregistrations', [AdminController::class, 'totalregistrations_ajax'])->name('datatables.totalregistrations');


    Route::prefix('admin')->group(function () {
    Route::get('/delete_one_income_doc/{name}/{dbname}', [AdminController::class, 'delete_one_income_doc']);
        Route::get('/delete_one_spouse_doc/{name}/{dbname}', [AdminController::class, 'delete_one_spouse_doc']);
        Route::get('/dashboard', [AdminController::class, 'dashboard']);
        Route::get('/messages', [AdminController::class, 'messages']);
        Route::get('/TotalRegistrations', [AdminController::class, 'TotalRegistrations']);
        Route::get('/ActiveClients', [AdminController::class, 'ActiveClients']);
        Route::get('/InactiveClients', [AdminController::class, 'InactiveClients']);
        Route::get('/Referrals', [AdminController::class, 'Referrals']);
        Route::get('/ActivityLog', [AdminController::class, 'ActivityLog']);
    });
});

// logout Route
Route::get('/logout', [LoginController::class, 'logout']);
