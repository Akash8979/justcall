<?php

namespace App\Repositories;


use App\Models\Comment;
use App\Repositories\Contracts\BusinessCommentRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BusinessCommentRepositoryImpl implements BusinessCommentRepository
{
    private $businessComment;

    public function __construct(Comment $businessComment,)
    {
        $this->businessComment = $businessComment;
    }


    public function createComment(array $payload)
    {
        $id = $this->businessComment->insertGetId([
            'userId' => $payload['userId'],
            'businessId' => $payload['businessId'],
            'comment' => filter_var($payload['comment'], FILTER_SANITIZE_STRING),
        ]);
        // $userId = Auth::id();
        $data = DB::table('comments')->where('CommentId', '=', $id)->select('comments.created_at', 'comments.commentId', 'comments.comment', 'users.name',)->leftJoin('users', 'comments.userId', '=', 'users.id')->get();

        return $data;
    }

    public function getAllComment($id)
    {
        $userid = Auth::user()->id;


        $data = DB::table('comments')->where('comments.businessId', '=', $id)->select('comments.businessId as bId', 'comments.commentId as cId', 'comments.comment', 'users.name', 'comments.userId as commentByUserID')->addSelect(DB::raw("(select COUNT(comment_like_dislikes.likeDislikeId) from comment_like_dislikes WHERE comment_like_dislikes.likeDislike = '1' AND comment_like_dislikes.businessId = bId AND comment_like_dislikes.userId = $userid AND comment_like_dislikes.commentId = cId) as liked"))->addSelect(DB::raw("(select COUNT(comment_like_dislikes.likeDislikeId) from comment_like_dislikes WHERE comment_like_dislikes.likeDislike = '0' AND comment_like_dislikes.businessId = bId AND comment_like_dislikes.userId = $userid AND comment_like_dislikes.commentId = cId) as disliked"))->leftJoin('users', 'comments.userId', '=', 'users.id')->get();



        return $data;
    }
}
