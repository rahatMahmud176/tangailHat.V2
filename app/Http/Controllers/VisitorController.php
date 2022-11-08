<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisitorController extends Controller
{
   
public function profile()
{
    return view('frontEnd.pages.visitor.profile');
} 
public function myAds()
{
    return view('frontEnd.pages.visitor.my-ads');
}









}//
