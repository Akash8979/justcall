<?php

namespace App\Providers;


use App\Repositories\BusinessCommentLikeDislikeRepositoryImpl;

use App\Repositories\BusinessCommentRepositoryImpl;

use App\Repositories\BusinessLikeDislikeRepositoryImpl;

use App\Repositories\Contracts\BusinessCommentLikeDislikeRepository;

use App\Repositories\Contracts\BusinessCommentRepository;

use App\Repositories\Contracts\BusinessLikeDislikeRepository;
use App\Repositories\Contracts\UserBusinessRepository;
use App\Repositories\UserBusinessRepositoryImpl;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(UserBusinessRepository::class, UserBusinessRepositoryImpl::class);
        $this->app->bind(BusinessLikeDislikeRepository::class, BusinessLikeDislikeRepositoryImpl::class);

        $this->app->bind(BusinessCommentRepository::class, BusinessCommentRepositoryImpl::class);
        $this->app->bind(BusinessCommentLikeDislikeRepository::class, BusinessCommentLikeDislikeRepositoryImpl::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
