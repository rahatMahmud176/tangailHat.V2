<?php

use Illuminate\Support\Facades\Route;
 
//test
 
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
    'as'      =>'dashbord', 
]); 
Route::get('admin/adminLogout',[
    'uses'    =>'App\Http\Controllers\LoginController@adminLogout',
    'as'      =>'adminLogout'
]);
Route::post('admin/upozillaSave',[
    'uses'    =>'App\Http\Controllers\UpozillaController@upozillaSave',
    'as'      =>'upozillaSave'
]);
Route::get('admin/manageUpozilla',[
    'uses'    =>'App\Http\Controllers\UpozillaController@manageUpozilla',
    'as'      =>'manageUpozilla'
]);
Route::get('admin/deleteUpozilla/{id}',[
    'uses'    =>'App\Http\Controllers\UpozillaController@deleteUpozilla',
    'as'      =>'deleteUpozilla'
]);
Route::get('admin/delete/upozilla/{id}',[
    'uses'    =>'App\Http\Controllers\UpozillaController@upozillaDelete',
    'as'      =>'upozillaDelete'
]);
Route::post('union/unionSave',[
    'uses'    =>'App\Http\Controllers\unionController@unionSave',
    'as'      =>'unionSave'
]);
Route::get('union/manageUnion',[
    'uses'    =>'App\Http\Controllers\unionController@manageUnion',
    'as'      =>'manageUnion'
]);
Route::get('union/deleteUnion/{id}',[
    'uses'    =>'App\Http\Controllers\unionController@deleteUnionAlert',
    'as'      =>'deleteUnion'
]);
Route::get('union/delete/{id}',[
    'uses'    =>'App\Http\Controllers\unionController@unionDelete',
    'as'      =>'unionDelete'
]);  
Route::post('category/categorySave',[
    'uses'    =>'App\Http\Controllers\categoryController@categorySave',
    'as'      =>'categorySave'
]);  
Route::get('category/manageCategory',[
    'uses'    =>'App\Http\Controllers\categoryController@manageCategory',
    'as'      =>'manageCategory'
]);   
Route::get('category/deleteCategoryAlert/{id}',[
    'uses'    =>'App\Http\Controllers\categoryController@deleteCategoryAlert',
    'as'      =>'deleteCategoryAlert'
]);    
Route::get('category/delete/{id}',[
    'uses'    =>'App\Http\Controllers\categoryController@deleteCategory',
    'as'      =>'delete/category'
]); 
 





});//loginCheckMiddleware


//SuperAdmin Router
Route::group(['middleware'=>'superAdminMiddleware'],function(){ 
Route::get('superAdmin/allUser',[
    'uses'   =>'App\Http\Controllers\myUserController@allUser',
    'as'     =>'allUser'
]);
Route::get('superAdmin/userRequest',[
    'uses'   =>'App\Http\Controllers\myUserController@userRequest',
    'as'     =>'userRequest'
]);
Route::get('superAdmin/userAproved/{id}',[
    'uses'   =>'App\Http\Controllers\myUserController@userAproved',
    'as'     =>'userAproved'
]);
Route::get('superAdmin/blockUser/{id}',[
    'uses'   =>'App\Http\Controllers\myUserController@blockUser',
    'as'     =>'blockUser'
]);
Route::get('superAdmin/blockUserFromAllUser/{id}',[
    'uses'   =>'App\Http\Controllers\myUserController@blockUserFromAllUser',
    'as'     =>'blockUserFromAllUser'
]);
Route::get('superAdmin/blockUserPage',[
    'uses'   =>'App\Http\Controllers\myUserController@blockUserPage',
    'as'     =>'blockUserPage'
]);
Route::get('superAdmin/unBlockUser/{id}',[
    'uses'   =>'App\Http\Controllers\myUserController@unBlockUser',
    'as'     =>'unBlockUser'
]);

});//SuperAdmin Middleware





//FrontEnd Router Here
Route::get('/',[
    'uses'  => 'App\Http\Controllers\MianController@index',
    'as'    =>'/home'
]);
Route::get('visitor/Profile',[
    'uses'  => 'App\Http\Controllers\VisitorController@profile',
    'as'    =>'visitor-profile'
]);
Route::get('visitor/my-ads',[
    'uses'  => 'App\Http\Controllers\VisitorController@myAds',
    'as'    =>'my-ads'
]); 
 
Route::resource('ads','App\Http\Controllers\AdsController');