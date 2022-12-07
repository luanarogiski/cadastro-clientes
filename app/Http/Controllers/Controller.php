<?php

namespace App\Http\Controllers;

use App\Models\Admin;
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
     * @var User recebe o usuario logado
     */
   protected $usuario;

    /**
     * @var Admin recebe o admin logado
     */
   protected $admin;

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

   protected function getAdminLogado(Request $request)
   {
       if ($request->session()->get('admin')) {
           return $request->session()->get('admin');
       }
       return null;
   }

    /**
     * Caso nao esteja logado redireciona para o login
     * @param Request $request
     */
   protected function checkLogin(Request $request)
   {
       // Se nem o usuário e nem o admin estiverem logados, redireciona pro login
       if (!$this->getUsuarioLogado($request) && !$this->getAdminLogado($request)) {
           redirect('/login')->send();
       }

       if ($this->getUsuarioLogado($request)) { // Se for o usuário que estiver logado, atribui o usuário
           $this->usuario = User::where('id', $this->getUsuarioLogado($request))->first();
       } else { // Se não, atribui o admin
           $this->admin = Admin::where('id', $this->getAdminLogado($request))->first();
       }

       View::share('usuario', $this->usuario);
       View::share('admin', $this->admin);
   }


    public function callAction($method, $parameters)
    {
        if (isset($parameters[0]) && is_object($parameters[0]) && $parameters[0] instanceof Request) {
            $request = $parameters[0];
            $rotasLiberadasSemLogin = [
                'user.login',
                'user.logout',
                'admin.register.admin'
            ];

            if (!in_array($request->route()->getName(), $rotasLiberadasSemLogin)) {
                $this->checkLogin($request); // Valida se esta logado
            }
        }
        return parent::callAction($method, $parameters);
    }

}
