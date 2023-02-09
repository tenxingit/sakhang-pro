<?php

use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddstaffController;
use App\Http\Controllers\Changepasscontroller;
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
Route::get('add-staff', [AddstaffController::class, 'add']);
Route::post('add-staff', [AddstaffController::class, 'store']);

Route::get('changepass', [Changepasscontroller::class, 'change']);
Route::post('changepass', [Changepasscontroller::class, 'store']);
