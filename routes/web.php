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
Route::group(
    [
        'prefix'    => 'admin',
        'namespace' => 'Admin'
    ],
    function () {
        Route::any('login', 'AuthController@login')->name('admin.auth.login');
        Route::group(
            [
                'middleware' => 'auth_admin:admin'
            ],
            function () {
                Route::get('logout', 'AuthController@logout')->name('admin.auth.logout');
                Route::get('index', 'IndexController@index')->name('admin.index.index');
                Route::get('home', 'IndexController@home')->name('admin.index.home');

                Route::group(
                    [
                        'prefix' => 'user',
                    ],
                    function () {
                        Route::any('change_password','UserController@changePassword')->name('admin.user.change_password');
                    }
                );
            }
        );
    }
);