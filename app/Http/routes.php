<?php

// Authentiace routes
Route::auth();

// Home routes
Route::get('/', 'HomeController@index');

// Place routes
Route::resource('places', 'PlaceController');

// Galleries routes
Route::resource('galleries', 'GalleryController');

// Posts routes
Route::resource('posts', 'PostController');
Route::post('posts/{post}/comments', ['uses' => 'PostController@storeComment', 'as' => 'posts.storeComment']);
Route::delete('posts/{post}/comments/{comment}', ['uses' => 'PostController@destroyComment', 'as' => 'posts.destroyComments']);

// Admin scope routes
Route::group(['prefix' => 'admin'], function()
{
    Route::get('/', ['middleware' => 'admin', function()
    {
        return 'Admin namsepace...';
    }]);
});
