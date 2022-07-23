<?php

use App\Http\Controllers\AttendanceController;

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


######################
# API ATTENDANCE

Route::get('/attendances', [AttendanceController::class, 'getList']);
Route::get('/attendances/{id}', [AttendanceController::class, 'getOne']);
Route::post('/attendances', [AttendanceController::class, 'post']);
Route::patch('/attendances/{id}', [AttendanceController::class, 'patch']);
Route::delete('/attendances/{id}', [AttendanceController::class, 'delete']);

######################