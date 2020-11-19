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
    return view('welcome');
});

Route::resource('user','UserController');

Route::resource('permission','PermissionController');

Route::resource('role','RoleController');



Route::get('/profile','UserController@profile')->name('user.profile');

Route::post('/profile','UserController@postProfile')->name('user.postProfile');

Route::get('/password/change','UserController@getPassword')->name('userGetPassword');

Route::post('/password/change','UserController@postPassword')->name('userPostPassword');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
