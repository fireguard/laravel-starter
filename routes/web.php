<?php

//Auth::routes();
Route::group(['namespace' => 'Auth'], function() {
    Route::get('auth/login', ['middleware' => 'guest', 'as' => 'login', 'uses' => 'LoginController@showLoginForm']);
    Route::post('auth/login', ['middleware' => 'guest', 'uses' => 'LoginController@login']);
    Route::post('auth/logout', ['middleware' => 'auth', 'as' => 'logout', 'uses' => 'LoginController@logout']);
    Route::post('auth/password/email', ['middleware' => 'guest', 'as' => 'password.email', 'uses' => 'ForgotPasswordController@sendResetLinkEmail']);
    Route::get('auth/password/reset', ['middleware' => 'guest', 'as' => 'password.request', 'uses' => 'ForgotPasswordController@showLinkRequestForm']);
    Route::post('auth/password/reset', ['middleware' => 'guest', 'uses' => 'ResetPasswordController@reset']);
    Route::get('auth/password/reset/{token}', ['middleware' => 'guest', 'as' => 'password.reset', 'uses' => 'ResetPasswordController@showResetForm']);
});

Route::group([], function() {
    Route::get('/', ['as' => 'site', 'uses' => 'SiteController@index']);
    Route::get('/home', ['as' => 'site.home', 'uses' => 'SiteController@index']);
});

Route::group(['middleware' => 'auth'], function () {


    Route::get('manager/', 'HomeController@index');
    Route::get('manager/home', ['as' => 'manager.home', 'uses' => 'HomeController@index']);
});


