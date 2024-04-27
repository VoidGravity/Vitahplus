<?php

use App\Http\Controllers\FrontOfficeController;
use App\Http\Controllers\HospitalController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'web'], function () {

    Route::post('/frontOffice/index/appointment', [FrontOfficeController::class, 'storeAppointment'])->name('frontOffice/index/appointment');
    Route::post('/hospital/FrontChat', [FrontOfficeController::class, 'geminiChatBot'])->name('hospital/chat');
    // Route::get('/hospital/FrontCallendar', [FrontOfficeController::class, 'callendar'])->name('hospital/callendar');
});
