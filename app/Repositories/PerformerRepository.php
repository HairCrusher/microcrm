<?php

namespace App\Repositories;


use App\Performer;
use App\User;
use Tymon\JWTAuth\Facades\JWTAuth;

class PerformerRepository extends BaseRepository
{
    protected $model;

    private $user;

    public function __construct(Performer $model, User $user)
    {
        $this->model = $model;
        $this->user = $user;
    }

    public function create($data)
    {
        $this->user = $this->user->current();
        $data['user_id'] = $this->user->id;

        $class = get_class($this->model);
        $newObj = new $class();
        $newObj->fill($data);

        $resp = $this->user->performers()->save($newObj, ['role_id' => 1]);

        return $resp;
    }

    public function find($id)
    {
        return Performer::with('users')->where('id', $id)->first();
    }

    public function getUserPerformers()
    {
        $userId = $this->user->current()->id;

        return $this->model->query()
            ->selectRaw("performers.*, IF(user_performer.user_id = $userId, 'admin', IF(user_event.user_id = $userId, 'moder', 'creator')) as role")
            ->leftJoin('user_performer', 'user_performer.performer_id', '=', 'performers.id')
            ->leftJoin('events', 'events.performer_id', '=', 'performers.id')
            ->leftJoin('user_event', 'user_event.event_id', '=', 'events.id')
            ->where('performers.user_id', $userId)
            ->orWhere('user_performer.user_id', $userId)
            ->orWhere('user_event.user_id', $userId)
            ->get();
    }

    public function getUsers($id)
    {
        $this->model->id = $id;
        return [
            'admin' => $this->model->admins,
            'moder' => $this->model->moderators
        ];
    }

}