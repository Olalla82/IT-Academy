<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Carbon\Carbon;

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
        $currentDateTime = Carbon::now();
        $newDateTime = Carbon::now()->addHours(2);

        echo $newDateTime;
        return $next($request);
       
    }
}
