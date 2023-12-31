<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;
use Illuminate\Http\Request;

class AdminRoleMiddleware
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
        
        if(Auth::check()){

            // Admin == 1
            // Driver == 2
            // Users == 0

            if(Auth::user()->role == '1'){
                
                return $next($request);
                
            } else{

                return redirect('/dashboard')->with('msg', 'You are not an Admin');
            }

        } else{

            return redirect('/login')->with('msg', 'You are not a Logged User');
        }

        return $next($request);
    }
}
