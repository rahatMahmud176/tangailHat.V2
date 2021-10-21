<?php

namespace App\Http\Middleware;

use App\Models\Admin;
use Closure;
use Illuminate\Http\Request;

class LoginCheckMiddleware
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
        if (Admin::logincheck()) {
            return $next($request);
        }else{
            return redirect('/login')->with(['msg'=>'Please Login or Register','msgType'=>'error']);
        }
        
    }
}
