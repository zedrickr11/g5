<?php

namespace app\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {

        // si la persona no inició sesión, entonces ....
        if (Auth::guard($guard)->guest()) {

            if ($request->ajax()) {

                return response('Unauthorized.', 401);

            } else {

                // si la persona no inició sesión y no es una solicitud ajax
                // enviar al formulario de ingreso
                return redirect()->guest('/loggin');

            }
        }

        return $next($request);
    }
}