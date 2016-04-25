<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::auth();

Route::get('/', 'HomeController@index');

Route::resource('places', 'PlaceController');

Route::resource('galleries', 'GalleryController');

Route::resource('blogs', 'BlogController');

Route::group(['prefix' => 'admin'], function()
{
    Route::get('/', ['middleware' => 'admin', function()
    {
        return 'Admin namsepace...';
    }]);
});
