<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AccessUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(\Auth::check()){
            return $next($request);
        } else {
            return redirect()->back()->with('authMSG', 'Veuillez vous connecter pour acceder a cette page');
        }
    }
}
