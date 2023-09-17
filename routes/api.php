<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\NotificationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/applications', [ApplicationController::class, 'index']);
Route::put('/application/{id}', [ApplicationController::class, 'update']);
Route::post('/application' , [ApplicationController::class, 'create']);
Route::post('/send' , [NotificationController::class, 'send']);
