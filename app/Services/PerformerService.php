<?php

namespace App\Services;


use App\Performer;
use App\Repositories\PerformerRepository;
use App\Repositories\UserRepository;
use App\UserRole;
use Tymon\JWTAuth\Facades\JWTAuth;

class PerformerService extends BaseService
{
    protected $repo;

    private $userRepository;
    private $performerRepository;
    private $userRoleService;

    public function __construct(PerformerRepository $repo, PerformerRepository $performerRepository, UserRepository $userRepository, UserRoleService $userRoleService)
    {
        $this->repo = $repo;
        $this->userRepository = $userRepository;
        $this->performerRepository = $performerRepository;
        $this->userRoleService = $userRoleService;
    }

    public function belongsToUser()
    {
        return $this->performerRepository->getUserPerformers();
    }

    public function getUsers($id)
    {
        return $this->performerRepository->getUsers($id);
    }

    private function getOwner($arr, $id)
    {
        foreach ($arr as $strict) {
            if ($id == $strict->id) {
                return $strict;
                break;
            }
        }
    }

    private function makeUsers($users)
    {
        foreach ($users as $key => $user) {
            $users[$key]->role_id = $user->pivot->role_id;
            unset($users[$key]['pivot']);
        }

        return $users;
    }

    public function provideAccess($id, array $data)
    {
        $user = $this->userRepository->findInGroups($data['id']);
        $role = $this->userRoleService->find($data['role_id']);
        $performer = $this->performerRepository->find($id);

        if (!$user || !$role || !$performer)
            return response()->json([
                'error' => 'Invalid parameters',
                'data' => [$user, $role, $performer]
            ]);

        return $performer->join($user, $role);
    }

    private function addRole($arr, $role){

        foreach ($arr as $key => $item)
            $arr[$key]['role'] = $role;

        return $arr;
    }

}