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

    public function password()
    {
        return view('user.password');
    }

    public function clientes()
    {

        return view('client.clientes');
    }
}
