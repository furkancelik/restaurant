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
    return view('frontend/index');
    // return view('welcome');
});

Route::group(['prefix' => 'admin'],function(){
  // Route::get('/', ['as' => 'admin.index', 'uses' => '\Whole\Core\Http\Controllers\Admin\IndexController@index']);

  Route::get('/index',['as'=>'admin.index','uses' =>function () {
      return view('backend/index/index');
  }]);
  Route::resource('/config', 'Admin\ConfigController');
  Route::resource('/menu-category', 'Admin\MenuCategoryController');
  Route::resource('/menu-detail', 'Admin\MenuDetailController');


  // Route::get('/config', ['as' => 'admin.config', 'uses' => 'Admin\ConfigController']);
});
