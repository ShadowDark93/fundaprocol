<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\PatrocinadoresController;
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

Route::get('/', [IndexController::class, 'index'])->name('welcome');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('staff', StaffController::class)->names('staff');

Route::resource('partners', PatrocinadoresController::class)->names('partners');
Route::get('partner/{$id}/activar')->name('partners.activar');

Route::resource('services', ServicesController::class)->names('services');

Route::get('about', [IndexController::class,'about'])->name('about');