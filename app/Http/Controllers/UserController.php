<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login()
    {
        return view('user.login');
    }

    public function register()
    {
        return view('user.register');
    }

    public function password()
    {
        return view('user.password');
    }

    public function tables()
    {
        return view('user.tables');
    }
}
