<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upozilla extends Model
{
    use HasFactory;
    protected $fillable =['upozilla'];

public static $item;


public static function upozillaSave($request)
{
    self::$item = new Upozilla();
    self::$item->district_id      = $request->district_id;
    self::$item->name             = $request->name;
    self::$item->save();
}



public function district()
{
    return $this->belongsTo('App\Models\District','district_id');
}






}//ModeL
