<?php
/**
 * Created by PhpStorm.
 * User: lozter
 * Date: 05.09.2019
 * Time: 19:13
 */

namespace App\Repositories;


use App\UserRole;

class UserRoleRepository extends BaseRepository
{
    protected $model;

    public function __construct(UserRole $model)
    {
        $this->model = $model;
    }

}