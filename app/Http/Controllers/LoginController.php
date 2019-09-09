<?php

namespace App\Http\Controllers;

use App\Socialite\VKdriver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\UserService;

class LoginController extends Controller
{
    public function dummyLogin(Request $request){
//        Auth::loginUsingId(2, true);
        return response()->json($request);
//        return redirect('/');
    }

    public function redirectToProvider()
    {
        return VKdriver::provider();
    }

    public function handleProviderCallback(Request $request, UserService $userService)
    {
        $resp = VKdriver::callback();

        $userService->authOrCreate($resp);

        return redirect('/');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
