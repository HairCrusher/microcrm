<?php

namespace App\Repositories;


use App\User;

class UserRepository extends BaseRepository
{
    protected $model;

    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function getPerformers(){
        return $this->model->performers;
    }

    public function adminPerformers()
    {
        return $this->model->adminPerformers;
    }

    public function findInGroups($data)
    {
        $resp = $this->findByVKID($data);
        $resp = $resp ?? $this->findByVKName($data);

        return $resp;
    }

    public function findByVKID($id)
    {
        return $this->model::VKID($id)->first();
    }

    public function findByVKName($name)
    {
        return $this->model::VKName($name)->first();
    }
}