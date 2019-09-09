<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => 'api', 'prefix' => 'auth'], function ($router) {
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::get('user', 'AuthController@user');
});

Route::group(['middleware' => ['api', 'auth:api']], function () {

    Route::resource('users', 'UserController', ['only' => [
        'show'
    ]]);

    Route::resource('groups', 'GroupController', ['only' => [
        'index', 'destroy'
    ]]);

//    Route::get('groups/merged', 'GroupController@merged')->name('groups.merged');

    Route::resource('performers', 'PerformerController', ['only' => [
        'index', 'store', 'show', 'update', 'destroy'
    ]]);

    Route::get('performers/{id}/users', 'PerformerController@users')->name('performers.users');

    Route::resource('events', 'EventController', ['only' => [
        'index', 'store', 'show', 'update', 'destroy'
    ]]);

    Route::post('performers/{performer}/provide_access', 'PerformerController@provideAccess')->name('performers.provide_access');

    Route::resource('user_roles', 'UserRoleController', ['only' => [
        'index', 'show',
    ]]);

});