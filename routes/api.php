<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\FPPP\FpppController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('v1')->group(function(){
    //route Charts
    Route::controller(ChartController::class)->group(function () {
        Route::get('pie-approachment', 'getApproachmentStatusData')->name('pie-aproachment');
        Route::get('line-quotation', 'getQuotationNominalData')->name('line-quotation');
    });

    Route::post('fppps/store/attachments', [FpppController::class, 'storeAttachments'])->name('fppps.store.attachments');
    Route::delete('fppps/delete/temp/attachments', [FpppController::class, 'deleteTempAttachments'])->name('fppps.delete.temp.attachments');
});