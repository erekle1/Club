<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();


Route::get('/', 'HomeController@index');

Route::resource('category','Admin\CategoryController');
Route::resource('permission','Admin\PermissionController');
Route::get('product',function (){

});


Route::group( ['middleware' => ['auth'],'prefix'=>'admin'], function () {
    Route::get('/', 'HomeController@index');
    Route::resource('category','Admin\CategoryController');
    Route::get('product',function (){

    });
});



Route::group([],function(){

});
