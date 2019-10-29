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


    Route::resource('students','StudentController')->except('destroy');
    Route::get('documents','DocumentController@index')->name('documents.index');
    Route::get('documents/create','DocumentController@create')->name('documents.create');
    Route::get('documents/{document}','DocumentController@show')->name('documents.show');

    Route::post('documents/store','DocumentController@store')->name('documents.store');
    Route::get('file/{name}','FileController@downloadFile')->name('file.download');
    Route::get('login','LoginController@showLoginForm')->name('login.form');
    Route::post('login','LoginController@login')->name('login.login');
    Route::match(['get', 'post'], 'logout', 'LoginController@logout')->name('login.logout');


//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
