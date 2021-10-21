<?php

namespace App\Http\Middleware;

use App\Models\Admin;
use Closure;
use Illuminate\Http\Request;

class logOutMiddleware
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
              return redirect('/dashbord')->with(['msg'=>'WellCome Here !','msgType'=>'warning']); 
        }else{
            return $next($request);
        }
        
    }
}
