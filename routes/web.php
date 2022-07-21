<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
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

Route::get('/', [Controller::class, 'index'])->name('home.index');


Route::any('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::any('/admin/register', [AdminController::class, 'register'])->name('admin.register');
Route::any('/admin/password', [AdminController::class, 'password'])->name('admin.password');
