<?php

use Illuminate\Support\Facades\Input;

use App\User;

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

/// Search field

Route::any('/search',function(){
    $searchString = Input::get('searchString');
    $user = User::where('username','LIKE','%'.$searchString.'%')->orWhere('name','LIKE','%'.$searchString.'%')->get();
    if(count($user) > 0)
        return view('search')->withDetails($user)->withQuery($searchString);
    else return view ('search')->withMessage('No Details found. Try to search again !');
});

/* When the When the search button is clicked, it goes to the route search where the logic for fetching data from database is present
Searches the table User for username and name with the provided input,
LIKE is used for searching data ('%' - any string)
After fetching the data the data is sent to view 'welcome',
if no data is found, then an error message is returned instead. */

Route::get('delete-accs','DeleteController@index');
Route::get('delete/{id}','DeleteController@destroy');

Route::get('/choose/{id}', 'ChooseController@display');