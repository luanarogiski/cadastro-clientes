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
                $user->senha = md5($request->input('senha'));
                $user->confirmSenha = $request->input('confirmSenha');
                $user->save();

                echo json_encode(['mensagem' => 'Usuário cadastrado com sucesso']);
                return;
            }
            return view('user.register');
        }

        public function login(Request $request)
        {

            if ($request->isMethod(Request::METHOD_POST)) {
                $user = User::where('email', $request->input('email'))
                    ->where('senha', md5($request->input('senha')))
                    ->get();

                if ($user) {
                    ExibirMensagem::criar()
                        ->showErro('Não é possível excluir, existem posts com essa categoria!');
                } else {
                    //nao encontrou
                }

                echo json_encode(['mensagem' => 'Usuário logado com sucesso']);
                return;
            }
            return view('user.login');
        }

        public function redefinirSenha()
        {
            return view('user.redefinirSenha');
        }

    }
