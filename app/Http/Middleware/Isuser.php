<?php

namespace App\Http\Middleware;

use Closure;

class Isuser
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
        if(!auth()->user())
        {
            return redirect('login');
        }else {
            if (auth()->user()->isuser()) {
                return $next($request);
            }
            return redirect('user');
        }
    }
}
