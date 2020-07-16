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
Route::get('/','User\UserController@home')->name('home');
Route::get('/loadmore','User\UserController@load_more')->name('load_more');
Route::get('/portfolio/saveproject','Admin\AdminController@show_add_project')->name('save_project');
Route::post('/portfolio/saveproject','Admin\AdminController@save_project')->name('save_project');
Route::get('/portfolio/projectedit/{id}','Admin\AdminController@project_edit')->name('project_edit');
Route::post('/portfolio/projecteditsave/{id}','Admin\AdminController@project_edit_save')->name('project_edit_save');
Route::get('/portfolio/projectdelete/{id}','Admin\AdminController@project_delete')->name('project_delete');
Route::get('/admin','Admin\AdminController@dashboard')->name('dashboard');
Route::get('/admin/message','Admin\AdminController@show_all_message')->name('show_all_message');
Route::get('/admin/messageseen/{id}','Admin\AdminController@message_seen')->name('message_seen');
Route::post('/user/message','User\UserController@message')->name('message');
// Route::get('/home', 'HomeController@index')->name('home');


Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
// Route::get('password/confirm', 'Auth\ConfirmPasswordController@showConfirmForm')->name('password.confirm');
// Route::post('password/confirm', 'Auth\ConfirmPasswordController@confirm');

Route::get('/admin/info','Admin\AdminController@show_admin_info')->name('save_admin_info');
Route::post('/admin/info','Admin\AdminController@save_admin_info')->name('save_admin_info');

    

