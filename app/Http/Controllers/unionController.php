<?php

namespace App\Http\Controllers;

use DB;
use Alert;
use App\Models\Union;
use Illuminate\Http\Request;

class unionController extends Controller
{
public function unionSave(Request $request)
{
   $this->validate($request,[
       'upozillaId'     => 'required',
       'union'          => 'required',
   ]);
   Union::unionSave($request);
   Alert::success('Success','You have been successfully add the union.');
   return redirect('union/manageUnion'); 
}

public function manageUnion()
{
    return view('backEnd.union.manageUnion',[
        'myUnions'  => DB::table('unions')
                    ->join('upozillas','unions.upozillaId','=','upozillas.id')
                    ->select('unions.*','upozillas.upozilla')
                    ->get(),
    ]);
}

public function deleteUnionAlert($id)
{
        // example:
        alert()->question('Are you sure?','Are you sure to delete this Union?')
        ->showConfirmButton('<a href="delete/'.$id.'" class="text-white">Delete</a>', '#3085d6')->toHtml()
        ->showCancelButton('Cancel', '#aaa')->reverseButtons();

        return redirect('union/manageUnion');
}

public function unionDelete($id)
{
     $item = Union::find($id);
     $item->delete();

     Alert::error('Delete', 'Your Union has been deleted !');
     return redirect('union/manageUnion');

}








}//Controller
