<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailSubscribe extends Model
{
    use HasFactory;
    protected $fillable = [
        'email',
    ];

public static $mail;

public static function new($email)
{
     self::$mail = new EmailSubscribe();
     self::$mail->email = $email;
     self::$mail->save();
}




}
