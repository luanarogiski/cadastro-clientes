<?php

    namespace App\Http\Controllers;

    use App\Autenticacao\Autenticacao;
    use App\Models\Admin;
    use App\Models\User;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;

    class UserController extends Controller
    {
        // LOGIN
        public function login(Request $request)
        {

            if ($request->isMethod(Request::METHOD_POST)) {
                $user = User::where('email', $request->input('email'))
                        ->where('senha', md5($request->input('senha')))
                        ->first();

                $admin = Admin::where('email', $request->input('email'))
                    ->where('senha', md5($request->input('senha')))
                    ->first();

                if ($user) {
                    $request->session()->put('usuario', $user->id);
                    echo json_encode(['sucesso' => true, 'mensagem' => 'Usuário logado com sucesso']);
                    return;
                } elseif ($request->session()->pull('usuario')) {
                    //$request->session()->pull('usuario');
                    echo json_encode(['sucesso' => false, 'mensagem' => 'Usuário ou Senha incorreta']);
                    return;
                } elseif ($admin) {
                    $request->session()->put('admin', $admin->id);
                    echo json_encode(['sucesso' => true, 'mensagem' => 'Admin logado com sucesso']);
                    return;
                } else {
                    $request->session()->pull('admin');
                    echo json_encode(['sucesso' => false, 'mensagem' => 'Admin ou Senha incorreta']);
                    return;
                }
            }
            return view('user.login');
        }



            // LOGOUT
        public function logout(Request $request)
        {
            $request->session()->pull('usuario');
            redirect('/login')->send();
        }


        // REDEFINIÇÃO DE SENHA
        public function redefinirSenha(Request $request)
        {
            if ($request->isMethod(Request::METHOD_POST)) {
                $user = User::where('email', $request->input('email'))
                    ->first();

                if ($user) {
                    $request->session()->put('email', $user->id);
                }
            }
            return view('user.redefinirSenha');
        }
    }

