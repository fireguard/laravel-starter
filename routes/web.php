<?php

//Auth::routes();
Route::group(['namespace' => 'Auth'], function() {
    Route::get('login', ['middleware' => 'guest', 'as' => 'login', 'uses' => 'LoginController@showLoginForm']);
    Route::post('login', ['middleware' => 'guest', 'uses' => 'LoginController@login']);
    Route::post('logout', ['middleware' => 'auth', 'as' => 'logout', 'uses' => 'LoginController@logout']);
    Route::post('password/email', ['middleware' => 'guest', 'as' => 'password.email', 'uses' => 'ForgotPasswordController@sendResetLinkEmail']);
    Route::get('password/reset', ['middleware' => 'guest', 'as' => 'password.request', 'uses' => 'ForgotPasswordController@showLinkRequestForm']);
    Route::post('password/reset', ['middleware' => 'guest', 'uses' => 'ResetPasswordController@reset']);
    Route::get('password/reset/{token}', ['middleware' => 'guest', 'as' => 'password.reset', 'uses' => 'ResetPasswordController@showResetForm']);
});

Route::group(['middleware' => 'auth'], function () {

    Route::get('/', 'HomeController@index');
    Route::get('/home', 'HomeController@index');
});


