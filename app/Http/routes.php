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

Route::get('/',['as'=>'home','uses'=>'HomeController@index']);
Route::post('/siparis-ver',['as'=>'order','uses'=>'HomeController@order']);



Route::get('/admin/login',['as'=>'admin.login','uses' =>'Admin\HomeController@login']);
Route::post('/admin/login',['as'=>'admin._login','uses' =>'Admin\HomeController@loginAction']);

Route::group(['middleware' => 'isAdmin','prefix' => 'admin'],function(){


  Route::get('/',['as'=>'admin.index','uses' =>'Admin\HomeController@index']);


  Route::get('/logout',['as'=>'admin.logout','uses' =>'Admin\HomeController@logout']);

  Route::resource('/config', 'Admin\ConfigController');
  Route::resource('/menu-category', 'Admin\MenuCategoryController');
  Route::resource('/menu-detail', 'Admin\MenuDetailController');
  Route::resource('/our-special', 'Admin\OurSpecialController');

  Route::resource('/order', 'Admin\OrderController');

  Route::resource('/user', 'Admin\UserController');


});
