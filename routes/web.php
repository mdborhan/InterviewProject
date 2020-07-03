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
Route::get('/', 'IndexController@index')->name('/');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/postOrvideo', 'PostVideoController@index')->name('postOrvideo');
Route::post('/add/postOrvideo', 'PostVideoController@Add')->name('add.postorvideo');
Route::post('/add/post', 'PostVideoController@AddPost')->name('add.post');
Route::post('/add/video', 'PostVideoController@AddVideo')->name('add.video');
Route::get('/details/{id}/{title}','PostVideoController@Details')->name('blog.details');


