<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\BusinessLikeDislikeRepository;
use Illuminate\Http\Request;

class BusinessLikeDislikeController extends Controller
{
    protected $repository;
    public function __construct(BusinessLikeDislikeRepository $repository)
    {
        $this->repository = $repository;
    }
    public function businessLike(Request $request)
    {
        $data = $this->repository->createLike($request->all());

        return response()->json(['data' => $data, 200]);
    }

    public function destroyBusinessLike(Request $request)
    {
        $data = $this->repository->destroyLike($request->all());
        return response()->json(['data' => $data, 200]);
    }
}
