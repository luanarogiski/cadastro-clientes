<?php

    namespace App\Http\Controllers;

    use App\Models\Clientes;
    use Illuminate\Http\Request;

    class ClientController extends Controller
    {
        public function index(Request $request)
        {
            return view('clientes.index');
        }

                // LISTAR
        public function listar(Request $request)
        {
            $request['filters'] = ['users_id', 'admins_id'];
            $request['users_id'] = $this->getUsuarioLogado($request);
            $request['admins_id'] = $this->getAdminLogado($request);
            Clientes::paginar($request);
        }


        public function editar(Request $request, $id)
        {
                    // EDITAR
            if ($request->isMethod('POST')) {
                $cliente = Clientes::where('id', $request->input('id'))->first();

                $cliente->nome = $request->input('nome');
                $cliente->dataNascimento = $request->input('dataNascimento');
                $cliente->cpf = $request->input('cpf');
                $cliente->profissao = $request->input('profissao');
                $cliente->telefone = $request->input('telefone');
                $cliente->cidade = $request->input('cidade');
                $cliente->estado = $request->input('estado');
                $cliente->endereco = $request->input('endereco');
                $cliente->dataCadastro = $request->input('dataCadastro');
                $cliente->save();
                return('Cliente alterado com sucesso');
            }
            $cliente = Clientes::where('id', $id)->first();

            return view('clientes.editar', ['cliente' => $cliente]);
        }


                // ADICIONAR
        public function adicionar(Request $request)
        {
            if ($request->isMethod(Request::METHOD_POST)) {
                //cadastro
                $cliente = new Clientes();
                $cliente->nome = $request->input('nome');
                $cliente->dataNascimento = $request->input('dataNascimento');
                $cliente->cpf = $request->input('cpf');
                $cliente->profissao = $request->input('profissao');
                $cliente->telefone = $request->input('telefone');
                $cliente->cidade = $request->input('cidade');
                $cliente->estado = $request->input('estado');
                $cliente->endereco = $request->input('endereco');
                $cliente->dataCadastro = $request->date('dataCadastro');
                $cliente->users_id = $this->getUsuarioLogado($request);
                $cliente->admins_id = $this->getAdminLogado($request);
                $cliente->save();

                echo json_encode(['mensagem' => 'Cliente cadastrado com sucesso']);
                return;
            }
            return view('clientes.adicionar');
        }


                // VISUALIZAR
        public function visualizar(Request $request, $id)
        {
            if ($request->isMethod('POST')) {
                $cliente = Clientes::where('id', $request->input('id'))->first();
                $cliente->nome = $request->input('nome');
                $cliente->dataNascimento = $request->input('dataNascimento');
                $cliente->cpf = $request->input('cpf');
                $cliente->profissao = $request->input('profissao');
                $cliente->telefone = $request->input('telefone');
                $cliente->cidade = $request->input('cidade');
                $cliente->estado = $request->input('estado');
                $cliente->endereco = $request->input('endereco');
                $cliente->dataCadastro = $request->input('dataCadastro');
                $cliente->save();
                return;
            }
            $cliente = Clientes::where('id', $id)->first();

            return view('clientes.visualizar', ['cliente' => $cliente]);
        }
    }
