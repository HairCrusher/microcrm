<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;

Route::get('/{any}', 'SpaController@index')->where('any', '.*');

Route::post('sociallogin/{provider}', 'AuthController@DummySocialSignup');

//Route::get('test', function (){
//    $client = new \VK\Client\VKApiClient();
//    $data = $client->groups()->getById(Auth::user()->access_token, [
//        'group_id' => '148039999',
//        'fields' => ['members_count']
//    ]);
//
//    dd($data);
//});

//Route::get('dummy_login', 'LoginController@dummyLogin');

//Route::get('login', 'LoginController@redirectToProvider')->name('login');
//Route::get('login/callback', 'LoginController@handleProviderCallback');
//Route::get('logout', 'LoginController@logout')->name('logout');

//Route::get('sign_in', function (){
//    return view('sign_in');
//})->name('sign_in');

//Route::group(['middleware' => ['auth'] ], function () {
//
//
//    Route::get('/', function (){
//        return redirect()->route('performers.index');
//    });
//
//    Route::resource('performers', 'PerformerController', ['only' => [
//        'index', 'createPerformer', 'show', 'update', 'destroy'
//    ]]);
//
//    Route::resource('groups', 'GroupController', ['only' => [
//        'index', 'createPerformer', 'destroy'
//    ]]);
//
//
//
////    Route::get('performers', function () {
////        return view('performers.performers_list');
////    });
////    Route::get('performer/{p_id}', function ($p_id) {
////        return view('performers.performer_single', ['id' => $p_id]);
////    });
////    Route::get('performer/{p_id}/clients', function () {
////        return view('clients.clients_list_performer');
////    });
//
//
//    Route::get('events', function () {
//        return view('events.events_list');
//    });
//    Route::get('event/{event_id}', function ($event_id) {
//        return view('events.event_single', ['id' => $event_id]);
//    });
//    Route::get('event/{event_id}/manager/{mgr_id}', function ($event_id, $mgr_id) {
//        return view('clients.clients_list_event');
//    });
//
//
//    Route::get('client/{client_id}', function ($client_id) {
//        return view('clients.client_single', ['id' => $client_id]);
//    });
//
//
//    Route::get('tasks', function () {
//        return view('tasks.tasks_list');
//    });
//
//});