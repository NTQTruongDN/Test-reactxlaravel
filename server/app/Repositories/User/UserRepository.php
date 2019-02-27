<?php

namespace App\Repositories\User;

use App\Models\User;
use App\Repositories\AbstractRepository;

class UserRepository extends AbstractRepository implements UserRepositoryInterface
{
    /**
     * @var User
     */
    protected $model;

    public function __construct(User $model)
    {
        parent::__construct($model);
    }
}
