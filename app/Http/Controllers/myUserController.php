<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\Admin;
use Illuminate\Http\Request;

class myUserController extends Controller
{
    
public function allUser()
{
     return view('backEnd.user.allUser',[
         'allUsers' => Admin::where('adminType',2)->get()
     ]);
}
    
public function userRequest()
{
     return view('backEnd.user.userRequest',[
         'users' => Admin::where('adminType',9)->get()
     ]);
}
public function userAproved($id)
{
     $item = Admin::find($id);
     $item->adminType = 2;
     $item->save();
    Alert::success('success','Admin Request Aproved successfull');
    return redirect('superAdmin/userRequest');
}
public function blockUser($id)
{
     $item = Admin::find($id);
     $item->adminType = 8;
     $item->save();
    Alert::error('Blocked','Admin Blocked successfull');
    return redirect('superAdmin/userRequest');
}
public function blockUserFromAllUser($id)
{
     $item = Admin::find($id);
     $item->adminType = 8;
     $item->save();
    Alert::error('Blocked','Admin Blocked successfull');
    return redirect('superAdmin/allUser');
}
public function unBlockUser($id)
{
     $item = Admin::find($id);
     $item->adminType = 2;
     $item->save();
    Alert::success('Unblocked','Admin UnBlock successfull');
    return redirect('superAdmin/blockUserPage');
}

public function blockUserPage(Type $var = null)
{
    return view('backEnd.user.blockUserPage',[
        'blockUsers' => Admin::where('adminType',8)->get()
    ]);
}







}//Controller
