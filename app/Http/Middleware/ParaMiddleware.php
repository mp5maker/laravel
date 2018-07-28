<?php

namespace App\Http\Middleware;

use Closure;

class ParaMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $first, $second = true)
    {
        return $next($request);
    }
}
