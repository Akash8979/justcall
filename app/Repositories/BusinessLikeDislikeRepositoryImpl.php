<?php

namespace App\Repositories;


use App\Models\BusinessLikeDislike;
use App\Repositories\Contracts\BusinessLikeDislikeRepository;
use Illuminate\Support\Facades\Auth;

class BusinessLikeDislikeRepositoryImpl implements BusinessLikeDislikeRepository
{
    private $businessLikeDislike;

    public function __construct(BusinessLikeDislike $businessLikeDislike)
    {
        $this->businessLikeDislike = $businessLikeDislike;
    }
    public function createLike(array $payload)
    {
        $businessId = $payload['data']['businessId'];
        $likeDislike =  $payload['data']['likeDislike'];




        $exist = $this->businessLikeDislike->where('userId', '=', Auth::user()->id)->where('businessId', '=', $businessId)->first();



        if ($exist == '') {
            $this->businessLikeDislike->create([
                'userId' => Auth::user()->id,
                'businessId' => $businessId,
                'likeDislike' => $likeDislike,
            ]);
        }

        if ($exist !== '' && $exist->likeDislike == 0) {
            $this->businessLikeDislike->where('userId', '=', Auth::user()->id)->where('businessId', '=', $businessId)->update([
                'likeDislike' => 1,
            ]);
        } elseif ($exist !== '' && $exist->likeDislike == 1) {
            $this->businessLikeDislike->where('userId', '=', Auth::user()->id)->where('businessId', '=', $businessId)->update([
                'likeDislike' => 0,
            ]);
        }

        return $exist;
    }
    public function destroyLike(array $payload)
    {

        $this->businessLikeDislike->where('userId', '=', $payload['data']['userId'])->where('businessId', '=', $payload['data']['businessId'])->where('likeDislike', '=', $payload['data']['likeDislike'])->delete();
        return $payload;
    }
}
