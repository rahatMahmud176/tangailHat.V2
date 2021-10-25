<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class categoryController extends Controller
{ 
public function categorySave(Request $request)
{
    
     $this->validate($request,[
         'categoryIcon'     =>'required',
         'categoryName'     =>'required | max:40 | unique:App\Models\Category,categoryName',
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
    $category   = Category::find($id);
    $category->delete();
    Alert::error('Deleted!','The category is Delete Successfull');
    return redirect('category/manageCategory');  
}







}//categoryController
