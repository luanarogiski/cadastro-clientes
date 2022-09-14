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
Route::get('/', [UserController::class, 'login'])->name('user.login');
Route::get('/login', [UserController::class, 'login'])->name('user.login');
Route::any('/register', [UserController::class, 'register'])->name('user.register');
Route::any('/register/criarConta', [UserController::class, 'criarConta'])->name('user.register.criarConta');
Route::any('/redefinirSenha', [UserController::class, 'redefinirSenha'])->name('user.redefinirSenha');

Route::any('/client/clientes', [ClientController::class, 'clientes'])->name('client.clientes');
Route::any('/client/listar', [ClientController::class, 'listar'])->name('client.listar');
Route::any('/client/editar/{id}', [ClientController::class, 'editar'])->name('client.editar');
Route::any('/client/adicionar', [ClientController::class, 'adicionar'])->name('client.adicionar');
Route::any('/client/visualizar/{id}', [ClientController::class, 'visualizar'])->name('client.visualizar');
