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
                $valorDaSessao = isset($_SESSION['nome']) ? $_SESSION['nome'] : 'nenhum valor encontrado';
                //var_dump('VALOR SALVO NA SESSÃO: ' . $valorDaSessao);
                if (sizeof($user) > 0) {
                    $_SESSION['nome'] = 'valor';


                    echo json_encode(['sucesso' => true, 'mensagem' => 'Usuário logado com sucesso']);
                    return;
                } else {
                    echo json_encode(['sucesso' => false, 'mensagem' => 'Usuário ou Senha incorreta']);
                    return;
                }


            }
            return view('user.login');
        }

        public function redefinirSenha()
        {
            return view('user.redefinirSenha');
        }

    }
