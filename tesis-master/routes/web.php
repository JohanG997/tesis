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

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/create-user', function () {
    return view('/admin/create-user');
});

Route::get('/update-user', function () {
    return view('/admin/update-user');
});

Route::get('/users', function () {
    return view('/admin/users');
});

Route::resource('/users', 'UsersController');

Route::get('users/{id}/destroy', [
    'uses' => 'UsersController@destroy',
    'as'   => 'users.destroy'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
