<?php

namespace App\Http\Controllers;

use App\Models\Upozilla;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert; 

class UpozillaController extends Controller
{
public function upozillaSave(Request $request)
{
     $this->validate($request,[
        'upozilla'      => 'required | unique:App\Models\Upozilla,upozilla',
     ]);
     Upozilla::upozillaSave($request);
     Alert::success('Success', 'Successfully Add an upozilla.');
     return redirect('admin/manageUpozilla');
    // ->with(['msg'=>'Success','msgType'=>'success']);
     

}
public function manageUpozilla()
{
     return view('backEnd.upozilla.manageUpozilla',[
         'upozillas'    => Upozilla::orderBy('id','desc')->get(),
     ]);
}

public function deleteUpozilla($id)
{
     // example:
        alert()->question('Are you sure?','Are you sure To delete this Upozilla?')
        ->showConfirmButton('<a href="delete/upozilla/'.$id.'" class="text-white"  >Delete</a> ', '#3085d6')->toHtml()
        ->showCancelButton('Cancel', '#aaa')->reverseButtons();

        return redirect('admin/manageUpozilla');
}

public function upozillaDelete($id)
{
     $upozilla = Upozilla::find($id);
     $upozilla->delete();

     Alert::error('Delete', 'Deleted this Upozilla');
     return redirect('admin/manageUpozilla');

}







}//Controller 
