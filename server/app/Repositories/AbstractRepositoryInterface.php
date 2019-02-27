<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Collection;

interface AbstractRepositoryInterface
{
    /**
     * @return void
     */
    public function commit();

    /**
     * @return void
     */
    public function beginTransaction();

    /**
     * @return void
     */
    public function rollback();

    /**
     * @param array $column
     *
     * @return Collection[]|null
     */
    public function getAll($column = ['*']);

    /**
     * @param array $attributes
     *
     * @return Collection
     * @throws \Exception
     */
    public function create(array $attributes);
}
