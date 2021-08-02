<?php

namespace App\Repositories\Contracts;

interface BusinessLikeDislikeRepository
{
    public function createLike(array $payload);
    public function destroyLike(array $payload);
}
