<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sample;
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

Route::get('/',[sample::class, 'index']);
Route::post('/',[sample::class, 'create']);
Route::get('/view',[sample::class, 'view']);
Route::get('/view/delete/{id}',[sample::class, 'delete']);
Route::get('/view/edit/{id}',[sample::class, 'edit']);
Route::post('/view/update/{id}',[sample::class, 'update']);
