<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\BusinessCommentRepository;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    protected $repository;
    public function __construct(BusinessCommentRepository $repository)
    {
        $this->repository = $repository;
    }
    public function businessComment(Request $request)
    {
        $data = $this->repository->createComment($request->all());
        return response()->json(['data' => $data, 'status' => 200]);
    }
    public function businessCommentAll(Request $request)
    {
        $id = $request->data['businessId'];

        $data = $this->repository->getAllComment($id);
        return response()->json(['data' => $data, 'status' => 200,]);
    }
}
