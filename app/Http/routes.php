<?php

// Authentiace routes
Route::auth();

// Home routes
Route::get('/', 'HomeController@index');

// Place routes
Route::resource('places', 'PlaceController', ['only' => ['index', 'show']]);
Route::post('places/{place}/comments', ['uses' => 'PlaceController@storeComment', 'as' => 'places.storeComment']);
Route::delete('places/{place}/comments/{comment}', ['uses' => 'PlaceController@destroyComment', 'as' => 'places.destroyComments']);

// Galleries routes
Route::resource('galleries', 'GalleryController', ['only' => ['index', 'show']]);

// Posts routes
Route::resource('posts', 'PostController');
Route::post('posts/{post}/comments', ['uses' => 'PostController@storeComment', 'as' => 'posts.storeComment']);
Route::delete('posts/{post}/comments/{comment}', ['uses' => 'PostController@destroyComment', 'as' => 'posts.destroyComments']);

// Profile routes
Route::resource('profile', 'ProfileController',  ['only' => ['show', 'edit', 'update']]);

// Admin scope routes
Route::group(['prefix' => 'admin'], function()
{
    // Admin home dashboard
    Route::get('/', ['uses' => 'Admin\DashboardController@index', 'as' => 'admin.dashboard']);

    // Admin users controllers
    Route::resource('users', 'Admin\UserController');

    // Admin places controller
    Route::resource('places', 'Admin\PlaceController', ['except' => 'show']);

    // Admin galleries controller
    Route::resource('galleries', 'Admin\GalleryController');
    Route::delete('galleries/{gallery}/places/{place}', ['uses' => 'Admin\GalleryController@removePlace', 'as' => 'admin.galleries.removePlace']);

    // Admin posts controller
    Route::resource('posts', 'Admin\PostController', ['only' => ['index', 'destroy']]);
});
