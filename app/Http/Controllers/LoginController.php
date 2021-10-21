<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Session;

class LoginController extends Controller
{
public function adminLoginInfoSubmit(Request $request)
{
    $admin = Admin::where('adminEmail',$request->email)->first();
    if ($admin) {
        if (password_verify($request->password, $admin->password)) {
            if ($admin->adminType==9) {
                return redirect('/login')->with(['msg'=>'Please Wait For Approve.','msgType'=>'warning']); 
            }else{
                Session::put('adminId',$admin->id);
                Session::put('adminName',$admin->adminName);
                return redirect('/dashbord')->with(['msg'=>'WellCome','msgType'=>'success']); 

            }
        } else {
            return redirect('/login')->with(['msg'=>'Invalid Password','msgType'=>'error']);
        }
    }else{
        return redirect('/login')->with(['msg'=>'Invalid Email','msgType'=>'error']);
    }
}
 public function adminLogout()
{
    Session::forget('adminId');
    Session::forget('adminName');
    return redirect('/login')->with(['msg'=>'Logged Out !','msgType'=>'error']);
}

}//Controller
