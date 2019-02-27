<?php

namespace App\Repositories\User;

use App\Models\User;
use App\Repositories\AbstractRepositoryInterface;

interface UserRepositoryInterface extends AbstractRepositoryInterface
{
    /**
     * @param array $attributes
     *
     * @return User
     */
    public function create(array $attributes);
}
