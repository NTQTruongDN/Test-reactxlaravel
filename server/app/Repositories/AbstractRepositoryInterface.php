<?php

namespace App\Repositories;

interface AbstractRepositoryInterface
{
    /**
     * @param array $column
     *
     * @return mixed
     */
    public function getAll($column =['*']);

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
}
