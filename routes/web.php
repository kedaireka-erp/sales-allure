<?php

use App\Models\Fppp;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\DarkModeController;
use App\Http\Controllers\FPPP\FpppController;
use App\Http\Controllers\QuotationController;
use App\Http\Controllers\DealSourceController;
use App\Http\Controllers\LeadSourceController;
use App\Http\Controllers\LeadStatusController;
use App\Http\Controllers\ColorSchemeController;
use App\Http\Controllers\CompanyAreaController;
use App\Http\Controllers\CompanyTypeController;
use App\Http\Controllers\ContactTypeController;
use App\Http\Controllers\ApproachmentController;
use App\Http\Controllers\LeadInterestController;
use App\Http\Controllers\LeadPriorityController;

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

Route::get('dark-mode-switcher', [DarkModeController::class, 'switch'])->name('dark-mode-switcher');
Route::get('color-scheme-switcher/{color_scheme}', [ColorSchemeController::class, 'switch'])->name('color-scheme-switcher');

// Route::controller(AuthController::class)->middleware('loggedin')->group(function () {
//     Route::get('login', 'loginView')->name('login.index');
//     Route::post('login', 'login')->name('login.check');
// });

Route::controller(LoginController::class)->group(function () {
    Route::get('login', 'loginView')->name('login.index');
    Route::post('login', 'login')->name('login.check');
});


Route::middleware('auth')->group(function () {

    // Route::get('logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('logout', [LoginController::class, 'logout'])->name('logout');


    Route::middleware('role:Sales|Admin')->group(function () {

        Route::controller(PageController::class)->group(function () {
            Route::get('/', 'dashboardOverview1')->name('dashboard');
        });


        //route approachment -> approachment
        Route::resource('approachments', ApproachmentController::class);

        //route approachment -> activity
        Route::resource('activities', ActivityController::class);

        //route status
        Route::resource('status', StatusController::class);

        //route FPPP
        Route::get('fppps/attachment/download/{attachment}', [FPPPController::class, 'downloadAttachment'])->name('fppps.attachment.download');
        Route::get('fppps/topdf/{fppp}', [FpppController::class, 'topdf'])->name('fppps.topdf');
        Route::get('fppps/export/', [FpppController::class, 'export'])->name('fppps.export');
        Route::post('fppps/store/attachments', [FpppController::class, 'storeAttachments'])->name('fppps.store.attachments');
        Route::delete('fppps/delete/temp/attachments', [FpppController::class, 'deleteTempAttachments'])->name('fppps.delete.temp.attachments');
        Route::delete('fppps/delete/attachment/{attachment}', [FpppController::class, 'deleteAttachment'])->name('fppps.delete.attachment');
        Route::get('fppps/create/{quo?}', [FpppController::class, 'create'])->name('fppps.create');
        Route::resource('fppps', FpppController::class)->except(['create']);

        //route company_types
        Route::resource('company_types', CompanyTypeController::class);

        //route deal source
        Route::resource('deal_sources', DealSourceController::class);

        // route contact_type
        Route::resource('contact_types', ContactTypeController::class);

        //lead source
        Route::resource('leadsources', LeadSourceController::class);

        // Quotation
        Route::get('quotation/pdf', function () {
            return view('quotation.pdf-sample');
        });
        Route::get('quotation/{quo}/createfppp', [QuotationController::class, 'quotationToFppp'])->name('quotation.fppp');
        Route::get('quotation/export/', [QuotationController::class, 'export'])->name('quotation.export');
        Route::get('quotation/{quotation}/pdf/', [QuotationController::class, 'toPdf'])->name('quotations.pdf');
        Route::patch('quotation/edit/status/{quotation}', [QuotationController::class, 'updateStatus'])->name('quotation.edit.status');
        Route::resource('quotation', QuotationController::class)->only(['index', 'show']);

        //route company_areas
        Route::resource('company_areas', CompanyAreaController::class);

        //route contact
        Route::resource('contacts', ContactController::class);

        //route company
        Route::resource('companies', CompanyController::class);

        //route user
        Route::get('account/{account}/profile', [AccountController::class, 'show'])->name('account.profile');
        Route::get('account/{account}/personal-information', [AccountController::class, 'personal'])->name('account.personal-information');
        Route::get('account/{account}/profile/edit', [AccountController::class, 'edit'])->name('account.profile.edit');
        Route::patch('account/{account}/profile/update', [AccountController::class, 'update'])->name('account.profile.update');
        Route::patch('account/{account}/photo-profile', [AccountController::class, 'photoProfile'])->name('account.photoProfile');
        // Route::get('user', [UserController::class, 'topProfile'])->name('user');

        //route Kontak -> Lead Status
        Route::resource('leadstatuses', LeadStatusController::class);

        //route Kontak -> Lead Priority
        Route::resource('leadpriorities', LeadPriorityController::class);

        //route Kontak -> Lead Interest
        Route::resource('leadinterests', LeadInterestController::class);

        //route Charts
        Route::controller(ChartController::class)->group(function () {
            Route::get('pie-approachment', 'getApproachmentStatusData')->name('pie-aproachment');
            Route::get('line-quotation', 'getQuotationNominalData')->name('line-quotation');
        });

        //route logs
        Route::get('logs', function () {
            $logs = Spatie\Activitylog\Models\Activity::paginate(20)->withQueryString();
            return view('logs.index', compact('logs'));
        })->name('logs.index');
    });
});
