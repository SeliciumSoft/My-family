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
})->name('index');


Route::get('/admin', function () {
    return view('admin');
})->name('admin');


Route::get('/about', function () {
    return view('pages.about');
})->name('about');



Auth::routes();
Route::resource('user', 'UserController');
Route::post('/user/auth/','UserController@auth')->name('user.auth');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user/profile/', 'HomeController@profile')->name('user.profile');
Route::post('/user/{id}/update', 'UserController@update_user')->name('user.update_user');

//Route::get('/user', 'UsersController@index');
//Route::post('/register/user', 'UserController@store')->name('register-user');
