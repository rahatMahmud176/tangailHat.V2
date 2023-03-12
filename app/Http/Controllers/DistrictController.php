<?php

namespace App\Http\Controllers;

use App\Models\District;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DistrictController extends Controller
{
    
    public $district;


    public function new(Request $request)
    {
        District::new($request->district);
        Alert::toast('Save Successfully!','success');
        return redirect()->back();
    
    }

    public function manage( )
    {
        return view('backEnd.district.manage',[
            'districts' => District::orderBy('id','DESC')->get()
        ]);
    }







}
