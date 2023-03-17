<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class categoryController extends Controller
{ 


public $category;





public function categorySave(Request $request)
{
    
     $this->validate($request,[
         'img'     =>'required',
         'name'     =>'required | max:40 | unique:categories,name',
     ]);
     Category::categorySave($request);
     Alert::success('Success','Category Add Successfully');
     return redirect('category/manageCategory');
}
public function manageCategory()
{
    return view('backEnd.category.manageCategory');
}
public function deleteCategoryAlert($id)
{
     // example:
        alert()->question('Are you sure?','Are you Sure To delete This Category?')
        ->showConfirmButton('<a href="delete/'.$id.'" class="text-white">Yse! Delete</a>', '#3085d6')->toHtml()
        ->showCancelButton('Cancel', '#aaa')->reverseButtons();
        
        return redirect('category/manageCategory'); 
}
public function deleteCategory($id)
{
    $this->category   = Category::find($id);
    unlink($this->category->img);
    $this->category->delete();
    Alert::error('Deleted!','The category is Delete Successful');
    return redirect('category/manageCategory');  
}







}//categoryController
