<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

// Pages
Route::get('/', [PagesController::class, 'index'])->name('pages.index');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/login', [PagesController::class, 'login'])->name('login');
Route::post('/loginStore', [LoginController::class, 'loginStore'])->name('loginStore');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
