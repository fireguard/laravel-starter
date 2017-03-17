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
    Route::get('test', function() {
        return \App\Models\User::all();
    });

    Route::get('manager/', 'HomeController@index');
    Route::get('manager/home', ['as' => 'manager.home', 'uses' => 'HomeController@index']);
    Route::get('manager/example/form', ['as' => 'manager.example.form', 'uses' => 'HomeController@form']);

    Route::get('manager/users', ['as' => 'manager.users', 'uses' => 'UsersController@index']);
    Route::get('manager/user/add', ['as' => 'manager.users.create', 'uses' => 'UsersController@create']);
    Route::post('manager/user/store', ['as' => 'manager.users.store', 'uses' => 'UsersController@store']);
    Route::get('manager/user/edit/{id}', ['as' => 'manager.users.edit', 'uses' => 'UsersController@edit']);
    Route::put('manager/user/update/{id}', ['as' => 'manager.users.update', 'uses' => 'UsersController@update']);
});


