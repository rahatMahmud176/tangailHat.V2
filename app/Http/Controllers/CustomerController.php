<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\District;
use App\Models\EmailSubscribe;
use App\Models\Union;
use App\Models\Upozilla;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CustomerController extends Controller
{

public $customer;
public $id;
public $ids; 
public $upozillas; 
public $unions; 
public $exist_email; 


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
     Alert::toast('Email Verify Successfly Now Login !','success');
     return redirect('/');
}











}
