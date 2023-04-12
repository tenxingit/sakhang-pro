<?php

use App\Http\Controllers\BuildingController;
use App\Http\Controllers\ChangePasscontroller;
use App\Http\Controllers\LeshakController;
use App\Http\Controllers\DerimController;
use App\Http\Controllers\StaffController;
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


Route::get('/login', function(){
    return view('login');
});
Route::get('/', [StaffController::class, 'home']);


Route::get('add-staff', [StaffController::class, 'index']);
Route::post('/store', [StaffController::class, 'store'])->name('store');

Route::get('derim1', [DerimController::class, 'first']);
Route::get('derim2', [DerimController::class, 'second']);
Route::get('derim3', [DerimController::class, 'third']);
Route::get('derim4', [DerimController::class, 'fourth']);
Route::get('derim5', [DerimController::class, 'fifth']);
Route::get('derim6', [DerimController::class, 'sixth']);
Route::get('derim7', [DerimController::class, 'seventh']);

Route::get('building', [BuildingController::class, 'index']);
Route::post('/add', [BuildingController::class, 'add'])->name('add');

Route::get('leshak', [LeshakController::class, 'home']);
Route::get('addleshak',[LeshakController::class, 'addleshak']);
Route::post('/add-leshak', [LeshakController::class, 'store'])->name('add-leshak');
Route::get('edit-staff', [StaffController::class, 'edit']);


Route::get('changepass', [ChangePasscontroller::class, 'change']);
Route::post('changepass', [ChangePasscontroller::class, 'store']);

