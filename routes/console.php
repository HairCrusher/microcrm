<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');

Artisan::command('do', function () {
//    $user = \App\User::find(2);
//    $role = \App\UserRole::find(2);
//    $performer = \App\Performer::with('users')->get();
//    $performer->join($user, $role);
    $performer = \App\Performer::with('users')->where('id', 1)->get();

//    $resp = $performer->users();
    $this->comment($performer);
});
