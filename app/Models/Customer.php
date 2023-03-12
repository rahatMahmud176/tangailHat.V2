<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phn_no',
        'district_id',
        'upozilla_id',
        'union_id',
        'password',
        
    ];


public static $customer;
public static $token;

public static function new($request)
{
    self::$token = Str::random(64);

    self::$customer = new Customer();
    self::$customer->name              = $request->name;
    self::$customer->email             = $request->email;
    self::$customer->phn_no            = $request->phn_no;
    self::$customer->district_id       = $request->district_id;
    self::$customer->upozilla_id       = $request->upozilla_id;
    self::$customer->union_id          = $request->union_id;
    self::$customer->password          = bcrypt($request->password);
    self::$customer->token             = self::$token;
    self::$customer->save();

    $data = self::$customer->toArray();

    Mail::send('front-end.emails.register-verify', $data, function($message) use($data){
        $message->to($data['email']);
        $message->subject('Email Confirmation for Register');
    });




}





}
