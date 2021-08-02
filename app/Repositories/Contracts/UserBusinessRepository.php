<?php

namespace App\Repositories\Contracts;

interface UserBusinessRepository
{
    public function createUser(array $payload, $logo, $image);

    public function edit(array $payload, $logo, $image);
    public function allBusiness();
    public function userBusiness();
    public function business($payload);
    public function listBusiness($payload);
    public function destroyBusiness($payload);
    public function deactiveBusiness($payload);
}
