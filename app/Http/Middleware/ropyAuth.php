<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ropyAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {         // the echo statement test the middleware connection
            // echo 'this is my middleware';
            $path = $request->path();
            if(($path!=='admin_signin' && !Session::has('admin_signin'))){
                return redirect('/admin_signin');
            }
        return $next($request);
    }
}
