<?php

namespace Apptotem\Http\Middleware;

use Closure;

class Cors
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
        return $next($request)
        ->header('Access-Control-Allow-Origin','*')
        ->header('Access-Control-Allow-Methods','GET','POST','PATCH')
        ->header('Access-Control-Allow-Headers', 'Origin, X-Requested-With,Access-Control-Allow-Headers, Content-Type, Accept, Authorization');
    }
}
