<?php

namespace App\Providers;

use App\Interfaces\ICategoryRepository;
use App\Interfaces\IInstructorRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\InstructorRepository;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ICategoryRepository::class, CategoryRepository::class);
        $this->app->bind(IInstructorRepository::class,InstructorRepository::class);
   
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}