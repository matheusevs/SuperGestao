<?php

namespace App\Http\Middleware;

use App\LogAcesso;
use Closure;
use Facade\FlareClient\Http\Response;

class LogAcessoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $ip = $request->server->get('REMOTE_ADDR');
        $route = $request->getRequestUri();

        LogAcesso::create(['log' => "IP $ip requisitou a rota $route"]);

        $resposta = $next($request);

        $resposta->setStatusCode(201, 'O status e o texto da resposta foram modificados.');

        return $resposta;

        // return $next($request);
    }
}
