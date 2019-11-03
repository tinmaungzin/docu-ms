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


Route::resource('students', 'StudentController')->except('destroy');
Route::get('documents', 'DocumentController@index')->name('documents.index');
Route::get('documents-guest', 'DocumentController@guestIndex')->name('documents.guestIndex');
Route::get('documents/create', 'DocumentController@create')->name('documents.create');
Route::get('documents/{document}/edit', 'DocumentController@edit')->name('documents.edit');
Route::post('documents/{document}', 'DocumentController@update')->name('documents.update');
Route::get('documents/{document}', 'DocumentController@show')->name('documents.show');
Route::get('documents-guest/{document}', 'DocumentController@guestShow')->name('documents.guestShow');
Route::get('students-guest/{student}', 'StudentController@guestShow')->name('students.guestShow');
Route::get('authors/{author}', 'AuthorController@show')->name('authors.show');
Route::get('authors-guest/{author}', 'AuthorController@guestShow')->name('authors.guestShow');
Route::get('hods', 'HodController@show')->name('hods.show');
Route::post('search', 'SearchController@index')->name('search.index');
Route::post('guestSearch', 'SearchController@guestIndex')->name('search.guestIndex');
Route::get('bookmark/{student}/{document}', 'BookmarkController@index')->name('bookmark.index');
Route::post('documents', 'DocumentController@store')->name('documents.store');
Route::get('file/{name}', 'FileController@downloadFile')->name('file.download');
Route::get('login', 'LoginController@showLoginForm')->name('login.form');
Route::post('login', 'LoginController@login')->name('login.login');
Route::match(['get', 'post'], 'logout', 'LoginController@logout')->name('login.logout');
Route::get('info/about', 'InfoController@about')->name('info.about');


//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
