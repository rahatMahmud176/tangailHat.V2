<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['categoryIcon','categoryName'];


public static function categorySave($request)
{
    $image      = $request->file('categoryIcon');
    $imageName  = $image->getClientOriginalName();
    $direcoty   = 'categoryIcons/';
    $image->move($direcoty,$imageName);

     $item = new Category();
     $item->categoryName       = $request->categoryName;
     $item->categoryIcon       = $direcoty.$imageName;
     $item->save();
}



}//Model
