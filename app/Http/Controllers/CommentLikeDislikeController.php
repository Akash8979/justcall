<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\BusinessCommentLikeDislikeRepository;
use Illuminate\Http\Request;

class CommentLikeDislikeController extends Controller
{
    protected $repository;
    public function __construct(BusinessCommentLikeDislikeRepository $repository)
    {
        $this->repository = $repository;
    }
    public function businessCommentLike(Request $request)
    {
        $data = $this->repository->createLike($request->all());

        return response()->json(['data' => $data, 200]);
    }
    public function distroyBusinessCommentLike(Request $request)
    {
        $data = $this->repository->distroyLike($request->all());
        return response()->json(['data' => $data, 200]);
    }
}
