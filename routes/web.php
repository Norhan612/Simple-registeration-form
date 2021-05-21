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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'userController@login');

Route::get('/login', 'userController@login');

Route::post('/postlogin', 'userController@postlogin');

Route::get('/index', 'userController@showAllUsers')->middleware('auth');


Route::get('/register', 'userController@register');

Route::post('/postregister', 'userController@postregister');

Route::get('/logout', 'userController@logout');