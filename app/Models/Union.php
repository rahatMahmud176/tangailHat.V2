<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Union extends Model
{
    use HasFactory;
protected $fillable = ['upozillaId','union'];

public static function unionSave($request)
{
     $item = new Union();
     $item->upozillaId          = $request->upozillaId;
     $item->union               = $request->union;
     $item->save();
}












}//Model
