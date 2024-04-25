<?php 
use App\Http\Controllers\HospitalController;
use Illuminate\Support\Facades\Route;

Route::post('/hospital/appointment', [HospitalController::class, 'storeAppointment'])->name('hospital/appointment');
Route::post('/hospital/appointment/update', [HospitalController::class, 'UpdateAppointment'])->name('hospital/appointment');
Route::get('/hospital/appointment/{id}', [HospitalController::class, 'destroyAppointment'])->name('hospital/appointment');
Route::get('/hospital/appointment/AprouveAppointment/{id}', [HospitalController::class, 'AprouveAppointment'])->name('hospital/appointment');
Route::get('/hospital/appointment/RejectAppointment/{id}', [HospitalController::class, 'RejectAppointment'])->name('hospital/appointment');
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
// blood 
Route::post('/hospital/blood-bank', [HospitalController::class, 'storeBlood'])->name('hospital/blood-bank');

Route::post('/hospital/blood-bank/update', [HospitalController::class, 'updateBlood'])->name('hospital/blood-bank');
Route::GET('/hospital/blood-bank/{id}', [HospitalController::class, 'deleteBlood'])->name('hospital/blood-bank');
// report 
Route::post('/hospital/inventory-items/update', [HospitalController::class, 'updateInvetory'])->name('hospital/inventory-items');
Route::post('/hospital/inventory-items', [HospitalController::class, 'storeInventory'])->name('hospital/inventory-items');
Route::get('/hospital/inventory-items/{id}', [HospitalController::class, 'deleteInvontory'])->name('hospital/inventory-items');

// chat 
Route::group(['middleware' => 'web'], function () {
    Route::post('/hospital/chat', [HospitalController::class, 'geminiChatBot'])->name('hospital/chat');
    Route::get('/hospital/callendar', [HospitalController::class, 'callendar'])->name('hospital/callendar');
});