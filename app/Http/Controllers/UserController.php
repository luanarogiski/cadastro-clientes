<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        return view('home.index');
    }

    public function register()
    {
        return view('user.register');
    }

    public function criarConta()
    {
        return view('user.register.criarConta');
    }


    public function login()
    {
        return view('user.login');
    }

    public function redefinirSenha()
    {
        return view('user.redefinirSenha');
    }

    public function clientes()
    {

        return view('client.clientes');
    }
}
