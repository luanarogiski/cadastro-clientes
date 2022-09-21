<?php

    namespace App\Http\Controllers;

    use App\Models\User;
    use Illuminate\Http\Request;

    class UserController extends Controller
    {

        public function register(Request $request)
        {
            if ($request->isMethod(Request::METHOD_POST)) {
                //cadastro user
                $user = new User();
                $user->nome = $request->input('nome');
                $user->sobrenome = $request->input('sobrenome');
                $user->email = $request->input('email');
                $user->senha = $request->input('senha');
                $user->confirmSenha = $request->input('confirmSenha');
                $user->save();

                echo json_encode(['mensagem' => 'Usuário cadastrado com sucesso']);
                return;
            }
            return view('user.register');
        }

        public function login()
        {
            return view('user.login');
        }

        public function redefinirSenha()
        {
            return view('user.redefinirSenha');
        }

    }
