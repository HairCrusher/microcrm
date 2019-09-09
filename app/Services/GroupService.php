<?php

namespace App\Services;


use App\Helpers\SocialGroup;
use App\Repositories\GroupRepository;
use App\Socialite\VKdriver;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;
use VK\Client\VKApiClient;
use VK\Exceptions\Api\VKApiAccessGroupsException;
use VK\Exceptions\VKApiException;
use VK\Exceptions\VKClientException;

class GroupService extends BaseService
{
    protected $repo;

    private $VKApiClient;

    public function __construct(GroupRepository $repo, VKApiClient $VKApiClient)
    {
        $this->repo = $repo;
        $this->VKApiClient = $VKApiClient;
    }

    public function create(array $input)
    {
        try {
            $data = $this->VKApiClient->groups()->getById(JWTAuth::parseToken()->authenticate()->access_token, [
                'group_id' => $input['id'],
                'fields' => ['members_count']
            ]);
            $data = $data[0];
        } catch (VKApiException $e) {
        } catch (VKClientException $e) {
        }


        $group = [
            'user_id' => Auth::id(),
            'name' => $data['name'],
            'slug' => $data['screen_name'],
            'service_id' => $data['id'],
            'poster' => $data['photo_100'],
            'members_count' => $data['members_count']
        ];


        return $this->repo->create($group);
    }


    public function getMergedWithSocials()
    {
        $socialGroups = $this->getSocialGroups();
        return $this->mergeUserGroups($socialGroups);
    }

    private function getSocialGroups()
    {
        $groupsArr = [];
        try {
            $resp = $this->VKApiClient->groups()->get(JWTAuth::parseToken()->authenticate()->access_token, [
                'extended' => true,
                'filter' => 'editor'
            ]);

            foreach ($resp['items'] as $group){
                $groupsArr[$group['id']] = new SocialGroup(
                    $group['id'],
                    $group['name'],
                    $group['screen_name'],
                    'https://vk.com/'.$group['screen_name'],
                    $group['photo_50']
                    );
            }

        } catch (VKClientException $e) {
            if ($e->getCode() === 5) return ['asdf'];
            if ($e->getCode() === 5) return VKdriver::provider();
        } catch (VKApiAccessGroupsException $e) {
            return ['123'];
        } catch (VKApiException $e) {
            return [$e->getMessage()];
        }

        return $groupsArr;
    }

    private function mergeUserGroups(array $arr)
    {
//        $socialGroups = $arr;
        $userGroups = $this->all();
        foreach ($userGroups as $group){
            if(isset($arr[$group->service_id])) $arr[$group->service_id]->inSystem = true;
        }
//        $result = array_merge($socialGroups, $userGroups);

        return $arr;
    }

}