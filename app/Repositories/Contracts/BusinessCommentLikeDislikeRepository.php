<?php

namespace App\Repositories\Contracts;

interface BusinessCommentLikeDislikeRepository
{
    public function createLike(array $payload);
    public function distroyLike(array $payload);
}
