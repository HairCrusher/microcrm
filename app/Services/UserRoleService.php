<?php

namespace App\Services;


use App\Repositories\UserRoleRepository;

class UserRoleService extends BaseService
{

    protected $repo;

    public function __construct(UserRoleRepository $repo)
    {
        $this->repo = $repo;
    }

}