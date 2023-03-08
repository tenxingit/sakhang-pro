<?php

use App\Http\Controllers\ChangePasscontroller;
use App\Http\Controllers\StaffController;
use App\Models\Derim;
use Brick\Math\BigInteger;
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

$derim1_staffs=Derim::find(1)->staffs;
    return view('welcome', compact('derim1_staffs'));
});
Route::get('add-staff', [StaffController::class, 'index']);
Route::post('/store', [StaffController::class, 'store'])->name('store');;



Route::get('changepass', [ChangePasscontroller::class, 'change']);
Route::post('changepass', [ChangePasscontroller::class, 'store']);
