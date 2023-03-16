<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\District;
use App\Models\EmailSubscribe;
use App\Models\Union;
use App\Models\Upozilla;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Session;

class CustomerController extends Controller
{

public $customer;
public $id;
public $ids;
public $upozillas;
public $unions;
public $exist_email;
public $newEmail;


public function registerPage()
{
    return view('front-end.customer.register',[
        'districts' => District::where('status',1)->orderBy('id','desc')->get('id','name'),
    ]);
}
public function upozillasForDistrictAjax()
{
     $this->id = $_GET['id'];
    //  $this->upozillas = Upozilla::where([['status',1],['district_id',$this->id]])->get(['id','name']);
    //  return response()->json($this->upozillas);

    $this->upozillas = Upozilla::where([['status',1],['district_id',$this->id]])->get(['id','name']);
     return response()->view('front-end.ajax-result.upozillas',[
        'myUpozillas' => $this->upozillas,
     ]);
}
public function unionForUpozillaAjax()
{
    $this->id = $_GET['id'];
    // return response()->json($this->id);
    $this->unions = Union::where([['status',1],['upozilla_id',$this->id]])->get(['id','name']);
    return response()->view('front-end.ajax-result.unions',[
       'myUnions' => $this->unions,
    ]);
}

public function infoValidation($request)
{
     $this->validate($request,[
        'name'           => 'required',
        'email'          => 'required | unique:customers,email',
        'phn_no'         => 'required | numeric | min:11',
        'district_id'    => 'required',
        'upozilla_id'    => 'required',
        'union_id'       => 'required',
        'password'       => 'required',
        're_password'    => 'required | same:password',
     ]);
}

public function newCustomer(Request $request)
{
    $this->exist_email = EmailSubscribe::where('email',$request->email)->first();
    if ($this->exist_email) {

    }else{
        EmailSubscribe::new($request->email);
    }
    $this->infoValidation($request);
    Customer::new($request);
    Alert::toast('Check you Email, We send a Confirmation Mail','success');
    return redirect()->back();
}
public function emailVerify($token)
{
     $this->customer = Customer::where('token',$token)->first();
     $this->customer->email_varify_status = 1;
     $this->customer->save(); 
     Alert::toast('Email Verify Success!','success');
     return redirect('/');//todo  login path
}

public function existEmailCheck()
{
    $this->newEmail = $_GET['email'];
    // return response()->json($this->newEmail);
    $this->exist_email = Customer::where('email',$this->newEmail)->first();
    if ($this->exist_email) {
        return response()->json('unavailable');
    } else {
         return response()->json('available');
    }

}

public function loginSubmit(Request $request)
{
  
     $this->exist_email = Customer::where('email',$request->email)->first();
     if ($this->exist_email) {
        if ($this->exist_email->email_varify_status==1) {
            if (password_verify($request->password, $this->exist_email->password)) {
                Session::put('customerId',$this->exist_email->id);
                Session::put('customerName',$this->exist_email->name);
                Alert::toast('Login success!','success');
                return redirect('ads');
            } else {
                Alert::error('Invalid password');
                return redirect()->back(); 
            }
        } else {
             Alert::info('Not-Activated','Check your mail for activation');
             return redirect()->back();
        } 
     } else {
         Alert::error('your email is invalid');
         return redirect()->back();
     }
     
}
public function logout()
{
    Session::forget('customerId');
    Session::forget('customerName');
    Alert::toast('Logout success','error');
    return redirect('/');
}






}
