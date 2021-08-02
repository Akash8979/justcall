<?php

namespace App\Repositories;


use App\Models\CommentLikeDislike;
use App\Repositories\Contracts\BusinessCommentLikeDislikeRepository;
use Illuminate\Support\Facades\Auth;

class BusinessCommentLikeDislikeRepositoryImpl implements BusinessCommentLikeDislikeRepository
{
    private $businessCommentLike;

    public function __construct(CommentLikeDislike $businessCommentLike)
    {
        $this->businessCommentLike = $businessCommentLike;
    }
    public function createLike(array $payload)
    {


        $businessId = $payload['data']['businessId'];
        $likeDislike =  $payload['data']['likeDislike'];
        $commentId = $payload['data']['commentId'];




        $exist = $this->businessCommentLike->where('userId', '=', Auth::user()->id)->where('businessId', '=', $businessId)->where('commentId', '=', $commentId)->first();



        if ($exist == '') {

            $this->businessCommentLike->create([
                'userId' => Auth::user()->id,
                'businessId' => $businessId,
                'commentId' => $commentId,
                'likeDislike' =>  $likeDislike,
            ]);
        }

        if ($exist !== '' && $exist->likeDislike == 0) {
            $exist = $this->businessCommentLike->where('userId', '=', Auth::user()->id)->where('businessId', '=', $businessId)->where('commentId', '=', $commentId)->update([
                'likeDislike' => 1,
            ]);
        } elseif ($exist !== '' && $exist->likeDislike == 1) {
            $exist = $this->businessCommentLike->where('userId', '=', Auth::user()->id)->where('businessId', '=', $businessId)->where('commentId', '=', $commentId)->update([
                'likeDislike' => 0,
            ]);
        }

        return $exist;







        return "Liked";
    }
    public function distroyLike(array $payload)
    {
        $this->businessCommentLike->where('userId', '=', $payload['data']['userId'])->where('commentId', '=', $payload['data']['commentId'])->where('businessId', '=', $payload['data']['businessId'])->where('likeDislike', '=', $payload['data']['likeDislike'])->delete();
    }
}
