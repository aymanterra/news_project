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
        return redirect('/news');
})->middleware('auth');


Auth::routes();


Route::get('/admin/roles', 'RoleController@index')->name('roles')->middleware('permission:view.roles');
Route::get('/admin/roles/create', 'RoleController@create')->middleware('permission:create.roles');
Route::get('/admin/roles/show/{role}', 'RoleController@show')->middleware('permission:view.roles');
Route::get('/admin/roles/edit/{role}', 'RoleController@edit')->middleware('permission:edit.roles');
Route::post('/admin/roles', 'RoleController@store')->middleware('permission:create.roles');
Route::post('/admin/roles/update/{role}', 'RoleController@update')->middleware('permission:edit.roles');
Route::post('/admin/roles/{role}', 'RoleController@destroy')->middleware('permission:delete.roles');


Route::get('/admin/users', 'UserController@index')->name('users')->middleware('permission:view.users');
Route::get('/admin/users/create', 'UserController@create')->middleware('permission:create.users');
Route::get('/admin/users/show/{user}', 'UserController@show')->middleware('permission:view.users');
Route::get('/admin/users/edit/{user}', 'UserController@edit')->middleware('permission:edit.users');
Route::post('/admin/users', 'UserController@store')->middleware('permission:create.users');
Route::post('/admin/users/update/{user}', 'UserController@update')->middleware('permission:edit.users');
Route::post('/admin/users/{user}', 'UserController@destroy')->middleware('permission:delete.users');


Route::get('/admin/news', 'NewsController@adminIndex')->middleware('permission:view.news');
Route::get('/admin/news/edit/{news}', 'NewsController@adminEdit')->middleware('permission:edit.news');
Route::post('/admin/news/update/{news}', 'NewsController@adminUpdate')->middleware('permission:edit.news');
Route::get('/admin/news/create', 'NewsController@adminCreate')->middleware('permission:create.news');
Route::post('/admin/news', 'NewsController@adminStore')->middleware('permission:create.news');
Route::get('/admin/news/show/{news}', 'NewsController@adminShow')->middleware('permission:view.news');
Route::post('/admin/news/{news}', 'NewsController@adminDestroy')->middleware('permission:delete.news');


Route::get('/admin/news/{news}/comments', 'CommentController@adminIndex')->middleware('permission:view.comments');
Route::get('/api/admin/news/{news}/comments', 'CommentController@apiIndex')->middleware('permission:view.comments');
Route::post('/api/admin/comments/{comment}/changeStatus', 'CommentController@apiUpdate')->middleware('permission:edit.comments');
Route::post('/api/admin/comments/{comment}/delete', 'CommentController@apiDestroy')->middleware('permission:delete.comments');


Route::get('/news', 'NewsController@index')->name('news')->middleware('permission:view.news');
Route::get('/news/create', 'NewsController@create')->middleware('permission:create.news');
Route::get('/news/show/{news}', 'NewsController@show')->middleware('permission:view.news');
Route::post('/news', 'NewsController@store')->middleware('permission:create.news');


Route::post('/news/{news}/comments', 'CommentController@store')->middleware('permission:create.comments');
