<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Session;

class RegisterController extends Controller
{
public function registerPage()
{
     return view('backEnd.register.register');
}
public function loginPage()
{
    return view('backEnd.register.login');
}
public function adminRegisterInfoValidate($request)
{
     $this->validate($request,[
         'adminName'    =>'required',
         'adminEmail'   =>'required | unique:App\Models\Admin,adminEmail',
         'password'     =>'required',
         'rePassword'   =>'required'
     ],[
        'adminName.required'    =>'Name field  required',
        'adminEmail.required'   =>'Email field  required',
        'rePassword.required'   =>'Re-password field  required',
     ]);
}
public function adminRegisterInfoSubmit(Request $request)
{
    $this->adminRegisterInfoValidate($request);
      if($request->password==$request->rePassword){
            Admin::adminRegisterInfoSubmit($request);
            return redirect('/login')->with(['msg'=>'Successfull. Wait For Aprove','msgType'=>'success']);
      }else{
          return redirect('/register')->with(['msg'=>'Wrong Password!','msgType'=>'error']);
      }
}


}//Conteoller
