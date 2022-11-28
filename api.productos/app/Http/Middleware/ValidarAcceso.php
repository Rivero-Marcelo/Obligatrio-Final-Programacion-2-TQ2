<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ValidarAcceso
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        $validado = Cache::get('validado', 'false');

        if($request->has('validadoAuth')){
            Cache::put('validado', 'true');
            return $next($request);
        }

        if($validado == 'true'){
            return $next($request);

        }


        return response()->json(['status' => 'error'], 401);
        
    }
}
