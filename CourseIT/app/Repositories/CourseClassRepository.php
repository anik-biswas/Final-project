<?php

namespace App\Repositories;

use App\Interfaces\ICourseClassRepository;
use App\Models\CourseClass;


class CourseClassRepository extends BaseRepository implements ICourseClassRepository
{
    protected $model;

    public function __construct(CourseClass $model)
    {
        parent::__construct($model);
    }



}