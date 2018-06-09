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
//后台首页
Route::get('index','Admin\IndexController@index');
//题目类型添加
Route::get('type','Admin\TitleController@type');
Route::post('type','Admin\TitleController@type');
//题目类型展示列表
Route::get('type_list','Admin\TitleController@type_list');
//问题添加
Route::get('question','Admin\TitleController@question');
Route::post('question','Admin\TitleController@question');
//问题展示列表
Route::get('question_list','Admin\TitleController@question_list');
//答案添加
Route::get('answer','Admin\TitleController@answer');
Route::post('answer','Admin\TitleController@answer');
//答案展示列表
Route::get('answer_list','Admin\TitleController@answer_list');
//审核页面
Route::get('audit','Admin\AuditController@audit');
//操作审核
Route::post('auditDo','Admin\AuditController@auditDo');
//操作拒绝
Route::post('ju','Admin\AuditController@ju');
//登陆
Route::get('login','Admin\IndexController@login');
Route::post('login','Admin\IndexController@login');

//用户管理
Route::get('user_add','Admin\RbacController@user_add');
Route::post('user_add','Admin\RbacController@user_add');
Route::get('user_list','Admin\RbacController@user_list');
//角色管理
Route::get('role_add','Admin\RbacController@role_add');
Route::post('role_add','Admin\RbacController@role_add');
Route::get('role_list','Admin\RbacController@role_list');
Route::get('user_role','Admin\RbacController@user_role');
Route::get('role_node','Admin\RbacController@role_node');
Route::post('role_add_do','Admin\RbacController@role_add_do');
Route::get('role_add_do','Admin\RbacController@role_add_do');


