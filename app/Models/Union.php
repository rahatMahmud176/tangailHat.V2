<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Union extends Model
{
    use HasFactory;
protected $fillable = ['upozilla_id','name'];

public static function unionSave($request)
{
     $item = new Union();
     $item->upozilla_id          = $request->upozilla_id;
     $item->name                 = $request->name;
     $item->save();
}

public function upozilla()
{
    return $this->belongsTo('App\Models\Upozilla','upozilla_id');
}










}//Model
