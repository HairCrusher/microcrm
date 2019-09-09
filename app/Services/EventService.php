<?php

namespace App\Services;


use App\Repositories\EventRepository;

class EventService extends BaseService
{
    protected $repo;

    public function __construct(EventRepository $repo)
    {
        $this->repo = $repo;
    }

}