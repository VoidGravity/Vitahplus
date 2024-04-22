<?php 
use App\Http\Controllers\HospitalController;
use Illuminate\Support\Facades\Route;

Route::post('/hospital/appointment', [HospitalController::class, 'store'])->name('hospital/appointment');
// crud /hospital/department
Route::post('/hospital/department', [HospitalController::class, 'store'])->name('hospital/department');
Route::post('/hospital/department/update', [HospitalController::class, 'update'])->name('hospital/department/update');
Route::get('/hospital/department/{id}', [HospitalController::class, 'destroy'])->name('hospital/department');
// crud  doctors 
Route::post('/hospital/doctor-nurse-add', [HospitalController::class, 'storeDoctore'])->name('hospital/doctor-nurse-add');
Route::post('/hospital/doctor-nurse-add/update', [HospitalController::class, 'updateDoctor'])->name('hospital/doctor-nurse-add/update');
Route::get('/hospital/doctor-nurse-add/{id}', [HospitalController::class, 'destroyDoctor'])->name('hospital/doctor-nurse-add');
//User crud 

Route::post('/hospital/patient-add', [HospitalController::class, 'storeUser'])->name('hospital/patient-add');
Route::post('/hospital/patient-list', [HospitalController::class, 'showHospitalPatientList'])->name('hospital/patient-list');
Route::get('/hospital/patient-profile/{id}', [HospitalController::class, 'showHospitalPatientProfile'])->name('hospital/patient-profile');
// birth report 
Route::post('/hospital/birth-report', [HospitalController::class, 'storeBirth'])->name('hospital/birth-report');


// chat 
Route::group(['middleware' => 'web'], function () {
    Route::post('/hospital/chat', [HospitalController::class, 'geminiChatBot'])->name('hospital/chat');
    Route::get('/hospital/callendar', [HospitalController::class, 'callendar'])->name('hospital/callendar');
});