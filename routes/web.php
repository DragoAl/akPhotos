<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//Auth::routes();

Route::get('/', 'GuestController@home')->name('home');

//autenticazione
// Route::post('/login', 'GuestController@loginweb')->name('loginweb');
Route::post('/login', 'Auth\LoginController@login') -> name('login');
Route::get('/logout', 'Auth\LoginController@logout') -> name('logout');


