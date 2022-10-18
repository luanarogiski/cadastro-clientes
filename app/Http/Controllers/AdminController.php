<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class AdminController extends Controller
{
            // ADMIN
    public function index()
    {
        return view('admin.index');
    }





            // REGISTER
    public function register(Request $request)
    {
        if ($request->isMethod(Request::METHOD_POST)) {
            //cadastro user
            $user = new User();
            $user->nome = $request->input('nome');
            $user->sobrenome = $request->input('sobrenome');
            $user->email = $request->input('email');
            $user->senha = md5($request->input('senha'));
            $user->confirmSenha = md5($request->input('confirmSenha'));
            $user->save();

            echo json_encode(['mensagem' => 'Usuário cadastrado com sucesso']);
            return;
        }
        return view('admin.register');
    }

}
