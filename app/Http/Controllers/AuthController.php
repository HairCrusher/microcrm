<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;


class AuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login']]);
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login()
    {
//        $credentials = request(['email', 'password']);
//
//        if (! $token = auth()->attempt($credentials)) {
//            return response()->json(['error' => 'Unauthorized'], 401);
//        }

        if (!$user = User::find(2)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $token = auth()->login($user);


        return $this->respondWithToken($token);
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function user()
    {
        return response()->json(['data' => auth()->user()]);
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'status' => 'success',
        ])->header('Authorization', $token);
    }

    public function SocialSignup($provider)
    {
        $user = Socialite::driver($provider)->stateless()->user();

        return response()->json($user);
    }

    public function DummySocialSignup($provider)
    {
        $user = User::find(2);

        return response()->json($user);
    }
}
