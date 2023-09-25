<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\ContentRepository;
use App\Repositories\EloquentContentRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(ContentRepository::class, EloquentContentRepository::class);
    }
}
