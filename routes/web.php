<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix'=>'admin'], function ()
{
    Route::group(['prefix'=>'cate'], function ()
    {
        Route::get('list', ['as'=>'admin.cate.list',
            'uses'=>'Admin\CategoryController@getList']);
        Route::get('add', ['as'=>'admin.cate.getAdd',
            'uses'=>'Admin\CategoryController@getAdd']);
        Route::post('add', ['as'=>'admin.cate.postAdd',
            'uses'=>'Admin\CategoryController@postAdd']);
    });
});