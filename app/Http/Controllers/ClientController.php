<?php

    namespace App\Http\Controllers;

    use App\Models\Clientes;
    use Illuminate\Http\Request;

    class ClientController extends Controller
    {
        public function index(Request $request)
        {
            if ($request->isMethod(Request::METHOD_POST)) {
                // retorna a listagem em json
                return;
            }

            return view();
        }

        public function listar()
        {

        }

        public function editar($id, $request)
        {
            //editar
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
           // return view('acoes.editar', [
           //     'id' => $id ]);
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

                //return;
                echo json_encode(['mensagem' => 'Cliente cadastrado com sucesso']);
            }
        }


        public function visualizar($id)
        {

           // return view('acoes.visualizar', [
           //     'id' => $id ]);
        }
    }
