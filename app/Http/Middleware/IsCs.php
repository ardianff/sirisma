<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsCs
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
        // if (Auth::user() && Auth::user()->role == 'CS') {
        //     return $next($request);
        //     // return redirect()->route('dashboard-cs');
        // }
        // return redirect('/');

        if (auth::check() && Auth::user()->role == 'CS') {
            return $next($request);
        } else {
            return redirect()->route('login');
        }
    }
}