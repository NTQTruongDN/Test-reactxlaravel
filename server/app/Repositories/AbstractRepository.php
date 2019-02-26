<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

abstract class AbstractRepository implements AbstractRepositoryInterface
{
    /**
     * @var Model
     */
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function getAll($column = ['*'])
    {
        $this->model->get($column);
    }

    /**
     * @inheritdoc
     */
    public function commit()
    {
        DB::commit();
    }

    /**
     * @inheritdoc
     */
    public function beginTransaction()
    {
        DB::beginTransaction();
    }

    /**
     * @inheritdoc
     */
    public function rollback()
    {
        DB::rollBack();
    }
}
