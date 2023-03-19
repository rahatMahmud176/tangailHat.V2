<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Customer;
use App\Models\District;
use App\Models\Union;
use App\Models\Upozilla;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdsController extends Controller
{
    public $cat;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front-end.ads.post-an-ad',[
            'districts'     => District::where('status',1)->get(['id','name']),
            'categories'    => Category::where('status',1)->get(['id','name']),
            'customer'      => Customer::find(Session::get('customerId')),
            'upazillas'     => Upozilla::where('status',1)->get(['id','name']),
            'unions'        => Union::where('status',1)->get(['id','name']),
        ]);
    }
    public function productInfoForCat()
    {
         $this->cat = $_GET['cat'];
         if ($this->cat=='4') {
            return response()->view('front-end.ajax-result.product-info-mobile',[
                'districts' => District::where('status',1)->get(['id','name']),
            ]);
         }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
