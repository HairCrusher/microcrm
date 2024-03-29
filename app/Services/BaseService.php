<?php

namespace App\Services;


abstract class BaseService
{
    protected $repo;

    public function all()
    {
        return $this->repo->all();
    }

    public function create(array $input)
    {
        return $this->repo->create($input);
    }

    public function find($id)
    {
        return $this->repo->find($id);
    }

    public function update($id, array $input)
    {
        return $this->repo->update($id, $input);
    }

    public function destroy($id)
    {
        return $this->repo->destroy($id);
    }
}