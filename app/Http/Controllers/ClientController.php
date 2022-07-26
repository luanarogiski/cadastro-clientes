<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    class ClientController extends Controller
    {
        public function editar()
        {
            return view('acoes.editar');
        }

        public function adicionar()
        {
            return view('acoes.adicionar');
        }
    }
