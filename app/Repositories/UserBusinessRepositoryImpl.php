<?php

namespace App\Repositories;

use App\Models\Business;
use App\Repositories\Contracts\UserBusinessRepository;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class UserBusinessRepositoryImpl implements UserBusinessRepository
{
    private $business;

    public function __construct(Business $business)
    {
        $this->business = $business;
    }

    /**
     * Undocumented function
     *
     * @param array $payload
     * @return void
     */

    public function createUser(array $payload, $logo, $image)
    {

        $id = $this->business->insertGetId([

            'userId' => Auth::id(),
            'logo' => $logo,
            'title' => $payload['businessTitle'],
            'shortDescription' => filter_var($payload['shortDescription'], FILTER_SANITIZE_STRING),
            'fullDescription' => filter_var($payload['fullDescription'], FILTER_SANITIZE_STRING),
            'images' => $image,
        ]);



        return;
    }
    public function edit(array $payload, $logo, $image)
    {

        $id = $this->business->where('businessId', '=', $payload['businessId'])->update([

            'userId' => Auth::id(),
            'logo' => $logo,
            'title' => $payload['businessTitle'],
            'shortDescription' => filter_var($payload['shortDescription'], FILTER_SANITIZE_STRING),
            'fullDescription' => filter_var($payload['fullDescription'], FILTER_SANITIZE_STRING),
            'images' => $image,
        ]);



        return;
    }
    public function destroyBusiness($payload)
    {

        $this->business->where('businessId', '=', $payload)->forceDelete();

        $userId = Auth::id();
        $data = DB::table('businesses')->where('businesses.userId', '=', $userId)->select('businesses.userId', 'businesses.businessId as bId', 'businesses.title', 'businesses.logo', 'businesses.deleted_at  as deactive')->addSelect(DB::raw("(SELECT COUNT(business_like_dislikes.likeDislikeId) from business_like_dislikes WHERE likeDislike = 0 AND business_like_dislikes.businessId = bId) as disliked"))->addSelect(DB::raw("(SELECT COUNT(business_like_dislikes.likeDislikeId) from business_like_dislikes WHERE likeDislike = 1 AND business_like_dislikes.businessId = bId) as liked"))->addSelect(DB::raw("(SELECT COUNT(comments.commentId) from comments WHERE comments.businessId = bId) as comment"))->get();

        return $data;
    }

    public function deactiveBusiness($payload)
    {



        $exist = $this->business->withTrashed()->where('businessId', '=', $payload)->first();


        if ($exist->deleted_at == null) {
            $this->business->where('businessId', '=', $payload)->delete();


            $userId = Auth::id();
            $data = DB::table('businesses')->where('businesses.userId', '=', $userId)->select('businesses.userId', 'businesses.businessId as bId', 'businesses.title', 'businesses.logo', 'businesses.deleted_at  as deactive')->addSelect(DB::raw("(SELECT COUNT(business_like_dislikes.likeDislikeId) from business_like_dislikes WHERE likeDislike = 0 AND business_like_dislikes.businessId = bId) as disliked"))->addSelect(DB::raw("(SELECT COUNT(business_like_dislikes.likeDislikeId) from business_like_dislikes WHERE likeDislike = 1 AND business_like_dislikes.businessId = bId) as liked"))->addSelect(DB::raw("(SELECT COUNT(comments.commentId) from comments WHERE comments.businessId = bId) as comment"))->get();

            return $data;
        } else {
            $this->business->where('businessId', '=', $payload)->restore();


            $userId = Auth::id();
            $data = DB::table('businesses')->where('businesses.userId', '=', $userId)->select('businesses.userId', 'businesses.businessId as bId', 'businesses.title', 'businesses.logo', 'businesses.deleted_at  as deactive')->addSelect(DB::raw("(SELECT COUNT(business_like_dislikes.likeDislikeId) from business_like_dislikes WHERE likeDislike = 0 AND business_like_dislikes.businessId = bId) as disliked"))->addSelect(DB::raw("(SELECT COUNT(business_like_dislikes.likeDislikeId) from business_like_dislikes WHERE likeDislike = 1 AND business_like_dislikes.businessId = bId) as liked"))->addSelect(DB::raw("(SELECT COUNT(comments.commentId) from comments WHERE comments.businessId = bId) as comment"))->get();

            return $data;
        }
    }
    public function allBusiness()
    {


        $data = DB::table('businesses')->where('businesses.deleted_at', '=', Null)->select('businesses.userId', 'businesses.businessId', 'businesses.title', 'businesses.logo', 'users.name as userName', 'businesses.shortDescription', 'businesses.fullDescription', 'businesses.images')->addSelect(DB::raw("(SELECT  count(business_like_dislikes.likeDislikeId) from business_like_dislikes where likeDislike = 1 and businesses.businessId = business_like_dislikes.businessId) as liked"))->addSelect(DB::raw("(SELECT  count(business_like_dislikes.likeDislikeId) from business_like_dislikes where likeDislike = 0 and businesses.businessId = business_like_dislikes.businessId) as disliked"))->leftJoin('users', 'businesses.userId', '=', 'users.id')->get();


        return $data;
    }
    public function userBusiness()
    {
        $userId = Auth::id();
        $data = DB::table('businesses')->where('businesses.userId', '=', $userId)->select('businesses.userId', 'businesses.businessId as bId', 'businesses.title', 'businesses.logo', 'businesses.deleted_at  as deactive')->addSelect(DB::raw("(SELECT COUNT(business_like_dislikes.likeDislikeId) from business_like_dislikes WHERE likeDislike = 0 AND business_like_dislikes.businessId = bId) as disliked"))->addSelect(DB::raw("(SELECT COUNT(business_like_dislikes.likeDislikeId) from business_like_dislikes WHERE likeDislike = 1 AND business_like_dislikes.businessId = bId) as liked"))->addSelect(DB::raw("(SELECT COUNT(comments.commentId) from comments WHERE comments.businessId = bId) as comment"))->addSelect(DB::raw("(SELECT COUNT(businesses.businessId) from businesses where businesses.userId = $userId) as noOfUserBusiness"))->get();



        return $data;
    }

    public function business($bId)
    {
        $userid = Auth::user()->id;

        $data = DB::table('businesses')->where('businesses.businessId', '=', $bId)->select('businesses.userId', 'businesses.businessId', 'businesses.title', 'businesses.logo', 'users.name as userName', 'businesses.shortDescription', 'businesses.fullDescription', 'businesses.images',)->addSelect(DB::raw("(SELECT COUNT(business_like_dislikes.likeDislikeId) from business_like_dislikes WHERE likeDislike = 0 AND business_like_dislikes.businessId =$bId  AND business_like_dislikes.userId =$userid) as disliked"))->addSelect(DB::raw("(SELECT COUNT(business_like_dislikes.likeDislikeId) from business_like_dislikes WHERE likeDislike = 1 AND business_like_dislikes.businessId =$bId  AND business_like_dislikes.userId =$userid) as liked"))->leftJoin('users', 'businesses.userId', '=', 'users.id')->get();
        // dd($data);
        return $data;
    }
    public function listBusiness($payload)
    {

        // return $payload;

        $data = DB::table('businesses')->where('businesses.deleted_at', '=', Null)->where('businesses.title', 'LIKE', "%$payload%")->select('businesses.userId', 'businesses.businessId', 'businesses.title', 'businesses.logo', 'users.name as userName', 'businesses.shortDescription', 'businesses.fullDescription', 'businesses.images')->addSelect(DB::raw("(SELECT  count(business_like_dislikes.likeDislikeId) from business_like_dislikes where likeDislike = 1 and businesses.businessId = business_like_dislikes.businessId) as liked"))->addSelect(DB::raw("(SELECT  count(business_like_dislikes.likeDislikeId) from business_like_dislikes where likeDislike = 0 and businesses.businessId = business_like_dislikes.businessId) as disliked"))->leftJoin('users', 'businesses.userId', '=', 'users.id')->get();



        return $data;
    }
}
