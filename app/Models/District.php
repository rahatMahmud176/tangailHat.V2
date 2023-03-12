<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

public static $district;


public static function new($name)
{
    self::$district = new District();
    self::$district->name = $name;
    self::$district->save();
}








}
