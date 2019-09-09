<?php

namespace App\Repositories;


use App\Event;

class EventRepository extends BaseRepository
{
    protected $model;

    public function __construct(Event $model)
    {
        $this->model = $model;
    }
}