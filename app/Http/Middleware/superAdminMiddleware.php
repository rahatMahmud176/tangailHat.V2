<?php

namespace App\Http\Middleware;

use App\Models\Admin;
use Closure;
use Illuminate\Http\Request;
use Alert;
use Session;

class superAdminMiddleware
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
        if (Session::get('adminId')) {
            if (Admin::superAdminCheck()) {
                return $next($request); 
            }else{
                Alert::info('Super Admin Only','Sorry you are not super Admin.');
                return redirect('/dashbord');
            }
        }else{
            Alert::info('Login Or Registration','please Login or Registrer first.');
            return redirect('/login');
        }
        
        
    }
}
