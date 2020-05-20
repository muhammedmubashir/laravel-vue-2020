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

Route::get("/hello",function(){
	return "<h1>Hello World!<h1>";
});

Route::get("/aboutus","content@aboutus");


Route::get("/services","content@services");


// Route::get("/posts","postController@index");
// Route::get("/posts/create","postController@create")->name("post.create");
// Route::post("posts/store","postController@store");
Route::resource('posts', 'postController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get("/vue","vuejs@index");

