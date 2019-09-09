<?php

namespace App\Socialite;


use Laravel\Socialite\Facades\Socialite;

class VKdriver
{
    private static $driverName = 'vkontakte';

    public static function provider() {
        return Socialite::driver(self::$driverName)
            ->scopes(['friends', 'groups'])
            ->redirect();
    }

    public static function callback() {
        return Socialite::driver(self::$driverName)->user();
    }
}