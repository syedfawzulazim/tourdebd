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

Route::get('/','frontend\PagesController@index')->name('index');

Route::get('/registration','frontend\PagesController@registration')->name('registration');


Route::group(['prefix' => 'admin'], function(){

  Route::get('/','backend\AdminPagesController@index')->name('admin.index');


});
