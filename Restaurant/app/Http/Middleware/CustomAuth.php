<?php

namespace App\Http\Middleware;

use Closure;
use Session;
class CustomAuth
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
        // echo "hello world";
        $path = $request->path();
        if(($path=="login" || $path=="register") && Session::get('user')){
            return redirect("/login");
        }
        else if(($path!='login' && !Session::get('user')) && ($path!='register' && !Session::get('user')))
        {
            return redirect("/login");
        }
        return $next($request);
    }
}