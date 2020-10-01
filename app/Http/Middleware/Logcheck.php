<?php

namespace App\Http\Middleware;
//use Session;
use Closure;
use Illuminate\Http\Request;

class logcheck
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
       //print_r(\Session::get('logdata'));
        if(empty(\Session::get('logdata')))
        {
            return redirect('/create');
        }
        return $next($request);
    }
}
