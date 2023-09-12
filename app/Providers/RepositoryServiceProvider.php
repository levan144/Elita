<?php

namespace App\Providers;

use App\Repositories\User\UserRepository;
use App\Repositories\User\UserRepositoryInterface;
use App\Repositories\Project\ProjectRepository;
use App\Repositories\Project\ProjectRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        /** Start of Projects */
        $this->app->bind(ProjectRepositoryInterface::class, ProjectRepository::class);
        /** End of Projects */
      
        /** Start of Users */
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        /** End of Users */


    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
