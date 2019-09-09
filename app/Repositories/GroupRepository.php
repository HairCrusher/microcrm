<?php

namespace App\Repositories;


use App\Group;
use App\Socialite\VKdriver;
use Illuminate\Support\Facades\Auth;
use VK\Client\VKApiClient;
use VK\Exceptions\Api\VKApiAuthException;
use VK\Exceptions\VKApiException;

class GroupRepository extends BaseRepository
{
    public $model;
    private $client;

    public function __construct(Group $model, VKApiClient $client)
    {
        $this->model = $model;
        $this->client = $client;
    }

}