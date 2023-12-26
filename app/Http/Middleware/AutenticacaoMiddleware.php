<?php

namespace App\Http\Middleware;

use Closure;

class AutenticacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $metodo_autenticacao, $perfil)
    {
        

        if($metodo_autenticacao == 'padrao'){
            echo "Verificar o usuário e senha no banco de dados. $perfil";
        }

        if($metodo_autenticacao == 'ldap'){
            echo "Verificar o usuário e senha no AD. $perfil";
        }

        if($perfil == 'visitante'){
            echo "Exibir apenas alguns recursos.";
        } else {
            echo "Carregar o perfil do banco de dados.";
        }

        if(true){
            return $next($request);
        }

        return Response('Acesso negado! Rota exige autenticação!');
    }
}
