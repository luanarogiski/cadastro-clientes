<?php

namespace App\Http\Controllers;

use App\Models\User;
use Couchbase\ViewQuery;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use View;

class Controller extends BaseController
{
   use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Se existir sessao para o usuario, retorna o id
     * @param Request $request
     * @return null
     */
   protected function getUsuarioLogado(Request $request)
   {
       if ($request->session()->get('usuario')) {
           return $request->session()->get('usuario');
       }
       return null;
   }

    /**
     * Caso nao esteja logado redireciona para o login
     * @param Request $request
     */
   protected function checkLogin(Request $request)
   {
       if (!$this->getUsuarioLogado($request)) {
           redirect('/login')->send();
       }
       View::share('usuario', User::where('id', $this->getUsuarioLogado($request))->first());
   }


    public function callAction($method, $parameters)
    {
        if (is_object($parameters[0]) && $parameters[0] instanceof Request) {
            $request = $parameters[0];
            if (substr($request->route()->getName(), 0,5) != 'user.') {
                $this->checkLogin($request); // Valida se esta logado
            }
        }
        return parent::callAction($method, $parameters);
    }

}
