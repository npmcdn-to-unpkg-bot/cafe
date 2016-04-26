<?php

Route::auth();

Route::get('/', 'HomeController@index');

Route::resource('places', 'PlaceController');

Route::resource('galleries', 'GalleryController');

Route::resource('posts', 'PostController');

Route::group(['prefix' => 'admin'], function()
{
    Route::get('/', ['middleware' => 'admin', function()
    {
        return 'Admin namsepace...';
    }]);
});
