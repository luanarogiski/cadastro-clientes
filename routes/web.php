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

Route::get('/home', [UserController::class, 'index'])->name('home.index');
Route::get('/', [Controller::class, 'acessar'])->name('user.login');
Route::get('/login', [Controller::class, 'login'])->name('user.login');
//Route::any('/user', [UserController::class, 'user'])->name('user.login');
//Route::any('/user/login', [UserController::class, 'login'])->name('user.login');
Route::any('/user/register', [UserController::class, 'register'])->name('user.register');
Route::any('/user/password', [UserController::class, 'password'])->name('user.password');
Route::any('/client/clientes', [UserController::class, 'clientes'])->name('client.clientes');

Route::any('/listar', [ClientController::class, 'listar'])->name('acoes.listar');
Route::any('/editar/{id}', [ClientController::class, 'editar'])->name('acoes.editar');
Route::any('/adicionar', [ClientController::class, 'adicionar'])->name('acoes.adicionar');
Route::any('/visualizar/{id}', [ClientController::class, 'visualizar'])->name('acoes.visualizar');
