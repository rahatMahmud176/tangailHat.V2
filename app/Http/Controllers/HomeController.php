<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

public function index()
{
     return view('front-end.home.home');
}

public function demo(Type $var = null)
{
     return view('front-end.emails.register-verify');
}




}
