<?php

namespace App\Http\Controllers;


use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index() {
        return view('admin.index');
    }

            // REGISTER
    public function register(Request $request)
    {
        if ($request->isMethod(Request::METHOD_POST)) {
            //cadastro admin
            $admin = new Admin();
            $admin->nome = $request->input('nome');
            $admin->sobrenome = $request->input('sobrenome');
            $admin->email = $request->input('email');
            $admin->senha = md5($request->input('senha'));
            $admin->confirmSenha = md5($request->input('confirmSenha'));
            $admin->save();

            echo json_encode(['mensagem' => 'Administrador Cadastrado com Sucesso']);
            return;
        }
        return view('admin.register');
    }



}
