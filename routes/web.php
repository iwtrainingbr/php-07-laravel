<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\TesteController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::any('/teste/{id}', [TesteController::class, 'login']);
Route::any('/cadastro', [TesteController::class, 'add']);


######################
# API ATTENDANCE
// Route::get('/attendances', [AttendanceController::class, 'getList']);
// Route::get('/attendances/{id}', [AttendanceController::class, 'getOne']);
// Route::post('/attendances', [AttendanceController::class, 'post']);
// Route::patch('/attendances/{id}', [AttendanceController::class, 'patch']);
// Route::delete('/attendances/{id}', [AttendanceController::class, 'delete']);

######################