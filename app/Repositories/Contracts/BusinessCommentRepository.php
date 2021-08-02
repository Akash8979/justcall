<?php

namespace App\Repositories\Contracts;

interface BusinessCommentRepository
{
    public function createComment(array $payload);
    public function getAllComment($payload);
  
}
