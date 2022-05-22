<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sample;
use App\Http\Controllers\CustomAuthController;
use App\Models\Customer;
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

Route::get('/home',[sample::class, 'index'])->name('home');
Route::post('/home',[sample::class, 'create']);
Route::get('/view',[sample::class, 'view'])->middleware('middle_ware');
Route::get('/view/delete/{id}',[sample::class, 'delete'])->middleware('middle_ware');
Route::get('/view/edit/{id}',[sample::class, 'edit'])->middleware('middle_ware');
Route::post('/view/update/{id}',[sample::class, 'update'])->middleware('middle_ware');

Route::get('/', [CustomAuthController::class, 'index'])->name('login')->middleware('middle_ware2');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom')->middleware('middle_ware2'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user')->middleware('middle_ware2');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom')->middleware('middle_ware2'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout')->middleware('middle_ware');
