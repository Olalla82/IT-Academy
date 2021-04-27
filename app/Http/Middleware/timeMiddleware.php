<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Http\Middleware\Carbon\Carbon;

class timeMiddleware
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
        //return $next($request);
        //return redirect('/');
        //return redirect('time');
        echo now()->add(2, 'hour');
       
    }
}
