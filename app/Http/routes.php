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
Route::group(['middleware' => 'auth'], function(){

    Route::get('home', ['middleware' => 'admin', function()
        {
        return view('admin');
        }]);

    Route::get('user','UsersController@getUserHome');

    Route::group(['middleware' => ['admincheck']], function()
    {
        Route::get('/admin','Admin\AdminController@index');
    });


    Route::get('profile', array(
       'as' => 'profile',
       'uses' => 'UserController@getProfile'
    ));


});

Route::get('/',function()
{
    return view('theme.login');
});

Route::get('projects','ProjectsController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);



