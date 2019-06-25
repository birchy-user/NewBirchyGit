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

Route::get('/', function()
{
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Auth::routes();

/* Posts routes*/

Route::get('/p/create', 'PostsController@create');     /// route to the creation of a new post

Route::post('/p', 'PostsController@store');   /// route that redirects to the post method of the form (after the addition of a new post)

Route::get('/p/{post}', 'PostsController@show');   /// when a user clicks on a post

/* Profiles Routes */


Route::get('/profile/{user}', 'ProfilesController@index')->name('profile/show');   /// route to the {user}'s profile and shows the ID of the profile

Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile/edit'); /// when a user edits his profile

Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');