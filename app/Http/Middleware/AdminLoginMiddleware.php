<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Config;

class AdminLoginMiddleware
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
        if (Auth::check())
        {
            if (Gate::allows('allow-admin', Auth::user())) {
                return $next($request);
            } 
            
            return redirect()->route('getAdminLogin');
        }
        
        return redirect()->route('getAdminLogin');
    }
}
