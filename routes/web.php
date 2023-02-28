<?php

use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\ChangePasscontroller;
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
Route::get('add-staff', [StaffController::class, 'index']);
Route::post('add-staff', [StaffController::class, 'store']);

Route::get('changepass', [ChangePasscontroller::class, 'change']);
Route::post('changepass', [ChangePasscontroller::class, 'store']);
