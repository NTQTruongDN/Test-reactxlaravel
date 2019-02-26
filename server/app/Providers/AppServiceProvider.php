<?php

namespace App\Providers;

use App\Repositories\AbstractRepository;
use App\Repositories\AbstractRepositoryInterface;
use App\Repositories\Task\TaskRepository;
use App\Repositories\Task\TaskRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(AbstractRepositoryInterface::class, AbstractRepository::class);
        $this->app->singleton(TaskRepositoryInterface::class, TaskRepository::class);
    }
}
