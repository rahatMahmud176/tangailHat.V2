<?php

use Illuminate\Support\Facades\Route;

 
Route::group(['middleware'=>'logOutMiddleware'], function(){
   // LoginRegisterRouterHere
Route::get('/register',[
    'uses'    =>'App\Http\Controllers\RegisterController@registerPage',
    'as'      =>'admin/register'
]); 
Route::post('admin/adminRegisterInfoSubmit',[
    'uses'    =>'App\Http\Controllers\RegisterController@adminRegisterInfoSubmit',
    'as'      =>'adminRegisterInfoSubmit'
]); 
Route::get('/login',[
    'uses'    =>'App\Http\Controllers\RegisterController@loginPage',
    'as'      =>'admin/login'
]);
Route::post('admin/adminLoginInfoSubmit',[
    'uses'    =>'App\Http\Controllers\LoginController@adminLoginInfoSubmit',
    'as'      =>'adminLoginInfoSubmit'
]); 

});//logOutMiddleware
 
 

// DashbordRouterHere
Route::group(['middleware'=>'loginCheckMiddleware'],function(){
    Route::get('/dashbord',[
        'uses'    =>'App\Http\Controllers\DashbordController@index',
        'as'      =>'admin/dashbord', 
    ]); 
    Route::get('admin/adminLogout',[
        'uses'    =>'App\Http\Controllers\LoginController@adminLogout',
        'as'      =>'adminLogout'
    ]);

});//loginCheckMiddleware






// FrontEnd Router Here
Route::get('/', function () {
    return view('welcome');
});
