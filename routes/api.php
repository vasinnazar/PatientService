<?php

use App\Http\Controllers\PatientController;
use Illuminate\Support\Facades\Route;


Route::prefix('patients')->group(function() {
    Route::get('/', [PatientController::class, 'index']);
    Route::post('/create' , [PatientController::class, 'create']);
});
