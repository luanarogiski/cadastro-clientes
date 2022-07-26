<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
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

Route::any('/user', [UserController::class, 'user'])->name('user');
Route::any('/user/login', [UserController::class, 'login'])->name('user.login');
Route::any('/user/register', [UserController::class, 'register'])->name('user.register');
Route::any('/user/password', [UserController::class, 'password'])->name('user.password');
Route::any('/user/tables', [UserController::class, 'tables'])->name('user.tables');

Route::any('/editar', [ClientController::class, 'editar'])->name('acoes.editar');
Route::any('/adicionar', [ClientController::class, 'adicionar'])->name('acoes.adicionar');
