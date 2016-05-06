<?php

// Authentiace routes
Route::auth();

// Home routes
Route::get('/', 'HomeController@index');

// Place routes
Route::resource('places', 'PlaceController', ['only' => ['index', 'show']]);
Route::post('places/{place}/comments', ['uses' => 'PlaceController@storeComment', 'as' => 'places.storeComment']);
Route::delete('places/{place}/comments/{comment}', ['uses' => 'PlaceController@destroyComment', 'as' => 'places.destroyComments']);
Route::post('places/{place}/like', ['uses' => 'PlaceController@like', 'as' => 'places.like']);
Route::post('places/{place}/unlike', ['uses' => 'PlaceController@unlike', 'as' => 'places.unlike']);

// Areas
Route::resource('areas', 'AreaController', ['only' => ['index', 'show']]);

// Galleries routes
Route::resource('galleries', 'GalleryController', ['only' => ['index', 'show']]);

// Posts routes
Route::resource('posts', 'PostController');
Route::post('posts/{post}/comments', ['uses' => 'PostController@storeComment', 'as' => 'posts.storeComment']);
Route::delete('posts/{post}/comments/{comment}', ['uses' => 'PostController@destroyComment', 'as' => 'posts.destroyComments']);
Route::post('posts/{post}/like', ['uses' => 'PostController@like', 'as' => 'posts.like']);
Route::post('posts/{post}/unlike', ['uses' => 'PostController@unlike', 'as' => 'posts.unlike']);

// Profile routes
Route::resource('profile', 'ProfileController',  ['only' => ['show', 'edit', 'update']]);

// Query routes
Route::get('seach', ['uses' => 'QueryController@search', 'as' => 'queries.search']);

// Contact routes
Route::post('contact', ['uses' => 'ContactController@store', 'as' => 'contact.store']);

// Admin scope routes
Route::group(['prefix' => 'admin'], function()
{
    // Admin home dashboard
    Route::get('/', ['uses' => 'Admin\DashboardController@index', 'as' => 'admin.dashboard']);

    // Admin users controllers
    Route::resource('users', 'Admin\UserController');

    // Admin places controller
    Route::resource('places', 'Admin\PlaceController', ['except' => 'show']);

    // Admin areas controller
    Route::resource('areas', 'Admin\AreaController');

    // Admin galleries controller
    Route::resource('galleries', 'Admin\GalleryController');
    Route::delete('galleries/{gallery}/places/{place}', ['uses' => 'Admin\GalleryController@removePlace', 'as' => 'admin.galleries.removePlace']);

    // Admin posts controller
    Route::resource('posts', 'Admin\PostController', ['only' => ['index', 'destroy']]);
});
