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

Auth::routes();

//Route::post('follow/{user}','FollowsController@store');

Route::get('/home','HomeController@index');

Route::get('/p/{post}','PostsController@show');

Route::get('/pp/create','PostsController@create');

Route::post('/p','PostsController@store');

Route::post('/post_update/{post}','PostsController@change');

Route::get('/pp/update/{post}','PostsController@update');

Route::get('/pp/delete/{post}','PostsController@delete');


Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');

Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');

Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');