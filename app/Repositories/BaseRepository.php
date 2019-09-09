<?php

namespace App\Repositories;


abstract class BaseRepository
{
    protected $model;

    public function all()
    {
        return $this->model->get();
    }


    public function create($data)
    {
        $class = get_class($this->model);
        $newObj = new $class();
        $newObj->fill($data);
        $newObj->save();

        return $newObj;
    }

    public function find($id)
    {
        return $this->model->where('id', $id)->first();
    }

    public function destroy($id)
    {
        return $this->find($id)->delete();
    }

    public function update($id, array $input)
    {
        $model = $this->find($id);
        $model->fill($input);
        $model->save();

        return $model;
    }
}