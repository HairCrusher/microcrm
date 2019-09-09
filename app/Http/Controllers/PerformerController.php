<?php

namespace App\Http\Controllers;

use App\Services\PerformerService;
use Illuminate\Http\Request;

class PerformerController extends Controller
{
    private $performerService;

    public function __construct(PerformerService $performerService)
    {
        $this->performerService = $performerService;
    }

    public function index()
    {
        return response()->json([
            'success' => true,
            'data' => $this->performerService->belongsToUser()
        ]);
    }

    public function show(Request $request, int $id)
    {
        return response()->json([
            'success' => true,
            'data' => $this->performerService->find($id)
        ]);
    }

    public function store(Request $request)
    {
        return response()->json([
            'success' => true,
            'data' => $this->performerService->create($request->all())
        ]);
    }

    public function update(Request $request, $id)
    {
        return response()->json([
            'success' => true,
            'data' => $this->performerService->update($id, $request->all())
        ]);
    }

    public function users(Request $request, $id)
    {
        return response()->json([
            'success' => true,
            'data' => $this->performerService->getUsers($id)
        ]);
    }

    public function provideAccess(Request $request, $id)
    {
        return response()->json([
            'success' => true,
            'data' => $this->performerService->provideAccess($id, $request->all())
        ]);
    }
}
