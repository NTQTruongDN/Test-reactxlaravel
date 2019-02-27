<?php

namespace App\Repositories\Task;

use App\Models\Task;
use App\Repositories\AbstractRepository;

class TaskRepository extends AbstractRepository implements TaskRepositoryInterface
{
    /**
     * @var Task
     */
    protected $model;

    public function __construct(Task $model)
    {
        parent::__construct($model);
    }
}
