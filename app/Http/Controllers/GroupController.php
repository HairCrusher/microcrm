<?php

namespace App\Http\Controllers;


use App\Services\GroupService;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    private $groupService;

    public function __construct(GroupService $groupService)
    {
        $this->groupService = $groupService;
    }

    public function index(Request $request)
    {
        return response()->json([
            'success' => true,
            'data' => $this->groupService->getMergedWithSocials()
        ]);
    }

//    public function merged(Request $request)
//    {
//        return response()->json([
//            'success' => true,
//            'data' => $this->groupService->getMergedWithSocials()
//        ]);
//    }

    public function store(Request $request){
        return $this->groupService->create($request->all());
    }
}
