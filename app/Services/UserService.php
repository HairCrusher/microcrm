<?php
namespace App\Services;

use App\Repositories\UserRepository;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Auth;

class UserService extends BaseService
{

    protected $repo;

    public function __construct(UserRepository $userRepository)
    {
        $this->repo = $userRepository;
    }

    public function authOrCreate($resp)
    {
        try {
            $user = $this->repo->findByVKID($resp->id);

            $this->update($user->id, [
                'access_token' => $resp->token,
                'last_visit' => Carbon::now()
            ]);
        } catch (ModelNotFoundException $e) {
            $user = $this->create([
                'first_name' => $resp->user['first_name'],
                'last_name' => $resp->user['last_name'],
                'vk_id' => $resp->id,
                'vk_name' => $resp->nickname,
                'avatar' => $resp->avatar,
                'access_token' => $resp->token,
                'last_visit' => Carbon::now(),
            ]);

        }

        Auth::login($user);
    }
}