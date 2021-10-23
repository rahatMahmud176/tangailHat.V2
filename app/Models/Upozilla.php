<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upozilla extends Model
{
    use HasFactory;
    protected $fillable =['upozilla'];

public static function upozillaSave($request)
{
     $item = new Upozilla();
     $item->upozilla      = $request->upozilla;
     $item->save();
}




}//ModeL
