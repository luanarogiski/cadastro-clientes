<?php

    namespace App\Http\Controllers;

    use App\Models\Clientes;
    use Illuminate\Http\Request;

    class ClientController extends Controller
    {
        public function index(Request $request)
        {
            if ($request->isMethod(Request::METHOD_POST)) {
                Clientes::paginar($request);
            }

            return view('client.index');
        }

        public function listar(Request $request)
        {
            Clientes::paginar($request);
        }

        public function editar(Request $request, $id)
        {
            //editar
            if ($request->isMethod('POST')) {
                $cliente = Clientes::where('id', $request->input('id'))->first();

                $cliente->nome = $request->input('nome');
                $cliente->dataNascimento = $request->input('dataNascimento');
                $cliente->cpf = $request->input('cpf');
                $cliente->profissao = $request->input('profissao');
                $cliente->telefone = $request->input('telefone');
                $cliente->cidade = $request->input('cidade');
                $cliente->endereco = $request->input('endereco');
                $cliente->dataCadastro = $request->input('dataCadastro');
                $cliente->dataCompra = $request->input('dataCompra');
                $cliente->save();
                return('Cliente alterado com sucesso');
            }

            $cliente = Clientes::where('id', $id)->first();

            return view('client.editar', ['cliente' => $cliente]);
        }

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
                $cliente->endereco = $request->input('endereco');
                $cliente->dataCadastro = $request->input('dataCadastro');
                $cliente->dataCompra = $request->input('dataCompra');
                $cliente->save();

                echo json_encode(['mensagem' => 'Cliente cadastrado com sucesso']);
                return;
            }

            return view('client.adicionar');
        }


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
                $cliente->endereco = $request->input('endereco');
                $cliente->dataCadastro = $request->input('dataCadastro');
                $cliente->dataCompra = $request->input('dataCompra');
                $cliente->save();
                return;
            }

            $cliente = Clientes::where('id', $id)->first();

            return view('client.visualizar', ['cliente' => $cliente]);
        }
    }
