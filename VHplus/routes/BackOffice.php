<?php 
use App\Http\Controllers\HospitalController;
use Illuminate\Support\Facades\Route;

Route::post('/hospital/appointment', [HospitalController::class, 'store'])->name('hospital/appointment');
Route::put('/hospital/appointment/{id}', [HospitalController::class, 'update'])->name('hospital/appointment');
Route::delete('/hospital/appointment/{id}', [HospitalController::class, 'destroy'])->name('hospital/appointment');



//chat 
Route::group(['middleware' => 'web'], function () {
    Route::post('/hospital/chat', [HospitalController::class, 'geminiChatBot'])->name('hospital/chat');
    Route::get('/hospital/callendar', [HospitalController::class, 'callendar'])->name('hospital/callendar');
});