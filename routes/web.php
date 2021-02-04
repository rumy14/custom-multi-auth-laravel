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

Route::get('admin/login', 'UserController@LoginForm')->name('login');
Route::post('admin/login/to', 'UserController@loginTo')->name('loginTo');

Route::get('dashboard/admin/index', 'DashboardController@index')->name('dashboard.admin.index');

Route::get('dashboard/user/index', 'DashboardController@index')->name('dashboard.user.index');