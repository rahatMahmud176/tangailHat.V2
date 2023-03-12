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
       'upozilla_id'     => 'required',
       'name'          => 'required',
   ]);
   Union::unionSave($request);
   Alert::toast('Success to save!','success');
   return redirect()->back(); 
}

public function manageUnion()
{
    return view('backEnd.union.manageUnion',[
        'unions'  => Union::all(),
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
