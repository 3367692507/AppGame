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
// Route::get('index',['uses'=>"Lianxi1Controller@index"]);
// Route::post('index',['uses'=>"Lianxi1Controller@add"]);
// Route::get('index',['uses'=>"Lianxi2Controller@index"]);
Route::any('index','Admin\Lianxi1Controller@index');
Route::post('add','Admin\Lianxi1Controller@add');
Route::post('save','Admin\Lianxi1Controller@save');
Route::any('hao','Admin\Lianxi2Controller@hao');
Route::get('show','Admin\Lianxi1Controller@show');
Route::get('del','Admin\Lianxi1Controller@del');
Route::get('up','Admin\Lianxi1Controller@up');
Route::post('add1','Admin\Lianxi2Controller@add1');
Route::get('show1','Admin\Lianxi2Controller@show1');
Route::get('del1','Admin\Lianxi2Controller@del1');
Route::get('up1','Admin\Lianxi2Controller@up1');
Route::post('save1','Admin\Lianxi2Controller@save1');

Route::any('findex','Admin\FriendController@findex');
Route::post('addfriend','Admin\FriendController@addfriend');
Route::post('savefriend','Admin\FriendController@savefriend');
Route::get('showfriend','Admin\FriendController@showfriend');
Route::get('delfriend','Admin\FriendController@delfriend');
Route::get('upfriend','Admin\FriendController@upfriend');

Route::any('login','Admin\LoginController@login');
Route::post('log','Admin\LoginController@log');
Route::get('showuser','Admin\LoginController@showuser');

Route::any('gradindex','Admin\GradController@gradindex');
Route::post('addgrad','Admin\GradController@addgrad');
Route::post('savegrad','Admin\GradController@savegrad');
Route::get('showgrad','Admin\GradController@showgrad');
Route::get('delgrad','Admin\GradController@delgrad');
Route::get('upgrad','Admin\GradController@upgrad');

session(['site'=>'LaravelAcademy.org']);

