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

Route::get('/',[
    'uses' => 'IndexController@index',
    'as' => 'index'
]);

Route::any('news_detail/{id}', [
    'uses' => 'IndexController@news_detail',
    'as' => 'detail'
]);
Route::group(['middleware' => 'web'],function(){

    Route::any('upload',[
        'uses'=>'MemberController@upload',
        'as'=>'upload',
    ]);

    Route::Post('doUpload',[
        'uses'=>'MemberController@doUpload',
    ]);

    Route::any('inster', [
        'uses' => 'MemberController@inster',
        'as' => 'inster'
    ]);

    Route::any('del', [
        'uses' => 'MemberController@del',
        'as' => 'del'
    ]);
});

Route::group(['prefix'=>'admin','middleware'=>'user'],function(){
    Route::any('index',[
        'uses'=>'AdminController@index',
        'as'=>'ad',
    ]);
    Route::any('knowType',[
        'uses'=>'AdminController@knowType',
        'as'=>'ty',
    ]);

    Route::any('delType/{id}',[
        'uses'=>'AdminController@delType',
        'as'=>'de',
    ]);

    Route::any('addType',[
        'uses'=>'AdminController@addType']);

});

