<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Public routes
|--------------------------------------------------------------------------
| Here is where all the public routes that does not need authentication
| goes
|
*/
 
Route::redirect('/', '/home');
Route::get('/home', 'HomeController')->name('home');

/*
|--------------------------------------------------------------------------
| Auth routes
|--------------------------------------------------------------------------
*/
Auth::routes(['verified' => true, 'register' => false]);

/*
|--------------------------------------------------------------------------
| Admin routes
|--------------------------------------------------------------------------
| Here is where all the routes that belong to only the admin go
|
*/
Route::group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin', 'as' => 'admin.'], function(){

    Route::get('/dashboard', 'DashboardController')->name('dashboard');

    Route::resource('stations', 'StationsController');
    Route::resource('officers', 'OfficersController');
    Route::resource('roles', 'RolesController')
        ->except('show');

    Route::get('permissions', PermissionsController::class)
        ->name('permissions.index');

    Route::get('locations', LocationsController::class)
        ->name('locations.index');
    
});

/*
|--------------------------------------------------------------------------
| Officer routes
|--------------------------------------------------------------------------
| Here is where all the officer routes go
|
*/
Route::group(['middleware' => ['auth'], 'namespace' => 'Officer', 'prefix' => 'officer', 'as' => 'officer.'], function(){

    Route::get('/dashboard', 'DashboardController')->name('dashboard');
    
});

/*
|--------------------------------------------------------------------------
| All Users Routes
|--------------------------------------------------------------------------
| Routes that all authenticated users have access to
|
*/
Route::group(['middleware' => ['auth']], function(){

    Route::get('/user/{user}', 'UsersController@show')->name('users.show');
    
});

