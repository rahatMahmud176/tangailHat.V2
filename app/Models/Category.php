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
 

     $item = new Category();
     $item->name       = $request->name;
     $item->img       =  imageUpload($request->file('img'),$request->name,100,100,'front-end/cat-img/');

     $item->save();
}



}//Model
