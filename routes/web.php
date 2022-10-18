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


Route::any('/', [UserController::class, 'login'])->name('user.login');
Route::any('/login', [UserController::class, 'login'])->name('user.login');
Route::get('/logout', [UserController::class, 'logout'])->name('user.logout');
Route::any('/register', [UserController::class, 'register'])->name('user.register');
Route::any('/redefinirSenha', [UserController::class, 'redefinirSenha'])->name('user.redefinirSenha');
Route::any('/criarNovaSenha', [UserController::class, 'criarNovaSenha'])->name('user.criarNovaSenha');


Route::any('/configuracoes', [ConfController::class, 'configuracoes'])->name('conf.configuracoes');

Route::any('/clientes', [ClientController::class, 'index'])->name('clientes.index');
Route::any('/clientes/listar', [ClientController::class, 'listar'])->name('clientes.listar');
Route::any('/clientes/editar/{id}', [ClientController::class, 'editar'])->name('clientes.editar');
Route::any('/clientes/adicionar', [ClientController::class, 'adicionar'])->name('clientes.adicionar');
Route::any('/clientes/visualizar/{id}', [ClientController::class, 'visualizar'])->name('clientes.visualizar');
