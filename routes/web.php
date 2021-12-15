<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\filestorageController;

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


Route::post('/insert', [filestorageController::class,'insert'])->name('file');
Route::get('/search', [filestorageController::class,'search'])->name('search');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('homepage');
Route::get('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);

