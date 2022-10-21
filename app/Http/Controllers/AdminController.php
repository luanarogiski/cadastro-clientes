<?php

namespace App\Http\Controllers;


use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class AdminController extends Controller
{
            // ADMIN
    public function index(Request $request)
    {
        if ($request->isMethod(Request::METHOD_POST)) {
            $admin = Admin::where('email', $request->input('email'))
                ->where('senha', md5($request->input('senha')))
                ->first();

            if ($admin) {
                $request->session()->put('admin', $admin->id);
                echo json_encode(['sucesso' => true, 'mensagem' => 'Administrador Logado']);
                return;
            } else {
                $request->session()->pull('admin');
                echo json_encode(['sucesso' => false, 'mensagem' => 'Digite os Dados do Administrador']);
                return;
            }
            return view('admin.index');
        }





        /*
        $this->checkLogin($request);

        if ($request->isMethod(Request::METHOD_POST)) {
            if (empty($request->input('email')) || empty($request->input('senha'))) {
                return redirect()->route('admin.index', ['error' => 1]);
            }

            if (Admin::login($request)) {
                return redirect()->route('admin.index');
            }

            return redirect()->route('admin.index', ['error' => 1]);
        }

        return view('admin.index', ['error' => $request->input('error')]);
        */
    }



            // PAINEL
    public function painel()
    {
        return view('admin.painel');
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
