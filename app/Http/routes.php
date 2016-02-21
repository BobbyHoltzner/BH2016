<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', function () {
    return view('index');
});

// Route::get('/blog', 'BlogController@index');
// Route::get('/blog/{slug}', 'BlogController@showPost');
Route::group(['middleware' => 'web'], function () {
  Route::auth();

  Route::get('/dashboard', 'DashboardController@index');

  Route::group(['prefix' => 'dashboard'], function(){
    Route::resource('posts', 'PostController');
    Route::post('image', 'PostController@uploadImage');
    Route::resource('categories', 'CategoryController');
    Route::get('allCategories', 'CategoryController@all');
        Route::get('tags/allTags', 'TagController@all');
    Route::resource('tags', 'TagController');
  });

});
Route::get('/{slug}', 'PostController@show');
// Route::get('/{slug}', 'PagesController@showPage');
