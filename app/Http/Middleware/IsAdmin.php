<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsAdmin
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
     //   dd (Auth::user());
        if (Auth::user()->usertype !== "Администратор") {
        Auth::logout();
            return redirect('/login');
        }

        return $next($request);
    }
}
