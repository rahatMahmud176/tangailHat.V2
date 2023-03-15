<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{

public function index()
{
     return view('front-end.home.home');
}
public function demo(){
    Alert::toast('Your Post as been submited!','success');
    return redirect()->back();
}


}
