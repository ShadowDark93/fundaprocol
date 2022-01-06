<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\LegaleController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\StaffController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [IndexController::class, 'index'])->name('index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('contactos', ContactoController::class)->names('contactos');
Route::resource('data', DataController::class)->names('data')->middleware('auth');
Route::resource('legales', LegaleController::class)->names('legales');

Route::resource('partners', PartnerController::class)->names('partners')->middleware('auth');
Route::get('partners/{id}/activar', [PartnerController::class, 'activar'])->name('partners.activar')->middleware('auth');
Route::get('partners/{id}/desactivar', [PartnerController::class, 'desactivar'])->name('partners.desactivar')->middleware('auth');

Route::resource('servicios', ServicioController::class)->names('servicios');

Route::resource('staff', StaffController::class)->names('staff')->middleware('auth');
Route::get('staff/{id}/activar', [StaffController::class, 'activar'])->name('staff.activar')->middleware('auth');
Route::get('staff/{id}/desactivar', [StaffController::class, 'desactivar'])->name('staff.desactivar')->middleware('auth');