<?php

namespace App\Http\Middleware;

use Closure;
use Symfony\Component\Console\Input\Input;

class AnyMiddleware
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
        Input::get('title');
        return $next($request);
    }
}
