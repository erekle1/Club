<?php 
use App\User;
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
    $user=User::with('posts')->find(1);
    dd($user->Posts);
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::group( ['middleware' => ['auth'],'prefix'=>'admin'], function () {


    Route::resource('post','Admin/PostController');// all admin/post request is  Handling by admin/PostController


});



Route::group([],function(){

});
