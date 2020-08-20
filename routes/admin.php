<?php

use Illuminate\Support\Facades\Route;

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

// prefix is 'admin' for all Routes in the file .. set in Providers/RouteServiceProvider.php

Route::group(['namespace' => 'Dashboard', 'middleware' => 'auth:admin'], function(){

    Route::get('/', 'DashboardController@index')->name('admin.dashboard');

});

Route::group(['namespace' => 'Dashboard', 'middleware' => 'guest:admin'], function(){

    Route::get('login','LoginController@login')->name('admin.login');
    Route::post('login', 'LoginController@postlogin')->name('admin.post.login');

});