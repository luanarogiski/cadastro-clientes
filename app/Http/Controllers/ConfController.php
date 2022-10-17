<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfController extends Controller
{
    public function configuracoes()
    {
        return view('conf.configuracoes');
    }
}
