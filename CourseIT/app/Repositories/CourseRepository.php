<?php

namespace App\Repositories;

use App\Interfaces\ICourseRepository;
use App\Models\Course;


class CourseRepository extends BaseRepository implements ICourseRepository
{
    protected $model;

    public function __construct(Course $model)
    {
        parent::__construct($model);
    }



}