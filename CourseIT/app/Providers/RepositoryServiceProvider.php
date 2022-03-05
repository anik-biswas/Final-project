<?php

namespace App\Providers;

use App\Interfaces\ICategoryRepository;
use App\Interfaces\ICourseClassRepository;
use App\Interfaces\ICourseRepository;
use App\Interfaces\IInstructorRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\CourseClassRepository;
use App\Repositories\CourseRepository;
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
        $this->app->bind(ICourseRepository::class,CourseRepository::class);
        $this->app->bind(ICourseClassRepository ::class,CourseClassRepository::class);
   
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