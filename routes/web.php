<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/','PublicController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/upload', 'OptionsController@index');

Route::post('/douploadprogress', 'PostOptionsController@upload');

Route::post('/job_progress/{id}' , 'PostOptionsController@getJobProgress');

Route::get('/auth/{provider}' , 'Auth\AuthController@redirectToProvider');

Route::get('/callback/{provider}' , 'Auth\AuthController@handleProviderCallback');

Route::get('/avatar/{uid}/{md}' , 'PublicController@get_avatar');

Route::get('/propic/{uid}/{md}' , 'PublicController@get_propic');

Route::get('/onGoingProgress', 'onGoingProgress@index');

Route::get('/v/{id}', 'PlayerController@index');

Route::get('/embed/{id}', 'EmbedController@index');

Route::get('/notifications', 'NotifyController@index');

Route::get('/profile', 'ProfileController@index');

Route::get('/dashboard', 'DashboardController@index');

Route::get('/settings', 'SettingsController@index');

Route::get('/subscriptions', 'SubscriptionsController@index');

Route::get('/trending', 'TrendingController@index');

Route::get('/history', 'HistoryController@index');

Route::get('/trending', 'TopController@index');






//Route::get('auth/google-plus', 'Auth\AuthController@GoogleProvider');

//Route::get('GoogleCallback', 'Auth\AuthController@GoogleCallback');

//Route::get('auth/facebook', 'Auth\AuthController@FacebookProvider');

//Route::get('facebookCallback', 'Auth\AuthController@FacebookCallback');

//Route::get('auth/twitter', 'Auth\AuthController@TwitterProvider');

//Route::get('twitterCallback', 'Auth\AuthController@TwitterCallback');

//Route::get('auth/instagram', 'Auth\AuthController@InstagramProvider');

//Route::get('instagramCallback', 'Auth\AuthController@InstagramCallback');
