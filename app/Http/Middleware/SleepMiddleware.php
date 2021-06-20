<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SleepMiddleware
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
        sleep(3);
        return $next($request);
    }
}
