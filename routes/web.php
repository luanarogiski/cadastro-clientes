<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ConfController;
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

            // USER
Route::any('/', [UserController::class, 'login'])->name('user.login');
Route::any('/login', [UserController::class, 'login'])->name('user.login');
Route::get('/logout', [UserController::class, 'logout'])->name('user.logout');
Route::any('/redefinirSenha', [UserController::class, 'redefinirSenha'])->name('user.redefinirSenha');

            // ADMIN
Route::any('/admin', [AdminController::class, 'index'])->name('admin.index');
//Route::any('/login', [AdminController::class, 'login'])->name('admin.index');
Route::any('/register', [AdminController::class, 'register'])->name('admin.register.admin');
Route::any('/register/user', [AdminController::class, 'user'])->name('admin.register.user');
Route::any('/acessar/user', [AdminController::class, 'acessar'])->name('admin.acessar.user');
Route::any('/users/listar', [AdminController::class, 'listar'])->name('admin.users.listar');



            // CONFIGURAÇÕES
Route::any('/configuracoes', [ConfController::class, 'configuracoes'])->name('conf.configuracoes');

            // CLIENTES
Route::any('/clientes', [ClientController::class, 'index'])->name('clientes.index');
Route::any('/clientes/listar', [ClientController::class, 'listar'])->name('clientes.listar');
Route::any('/clientes/editar/{id}', [ClientController::class, 'editar'])->name('clientes.editar');
Route::any('/clientes/adicionar', [ClientController::class, 'adicionar'])->name('clientes.adicionar');
Route::any('/clientes/visualizar/{id}', [ClientController::class, 'visualizar'])->name('clientes.visualizar');
