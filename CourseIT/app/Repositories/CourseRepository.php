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

    public function CreateCourse($request)
   
    {
        try {
            if ($request->hasFile('course_image')) {
                $path = $request->file('course_image')->store('course_images', 'public');
            } else {
                $path = null;
            }
        $course = $this->model;
        $course->name = $request->name;
        $course->course_type_id = $request->course_type_id;
        $course->category_id = $request->category_id;
        $course->instructor_id = $request->instructor_id;
        $course->Course_length = $request->Course_length;
        $course->price = $request->price;
        $course->discount_price= $request->discount_price;
        $course->description = $request->description;
        $course->course_image = $path;
        $course->save();
        flash('Successfully Created')->success(); 

        } catch (\Throwable $th) {
            flash('Something went wrong ' . $th->getMessage())->error();
        } 
    }
    public function UpdateCourse($request, $id)
    {
        
    }
    
    public function DeleteCourse($id)
    {
        
    }
}