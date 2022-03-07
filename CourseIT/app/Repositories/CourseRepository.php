<?php

namespace App\Repositories;

use App\Interfaces\ICourseRepository;
use Illuminate\Support\Facades\Storage;
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
        $course = $this->myFind($id);
        if(!$course){
            return false;
        }
        else{

            try {
                if ($request->hasFile('course_image')) {
                    $path = $request->file('course_image')->store('course_images', 'public');
                    $course->course_image = $path;
                } else {
                    unset($request['course_image']);
                }
            
                $course->name = $request->name;
                $course->course_type_id = $request->course_type_id;
                $course->category_id = $request->category_id;
                $course->instructor_id = $request->instructor_id;
                $course->Course_length = $request->Course_length;
                $course->price = $request->price;
                $course->discount_price= $request->discount_price;
                $course->description = $request->description;
                $course->save();
                flash('Successfully Updated')->success(); 
                return true;
            } catch (\Throwable $th) {
                flash('Something went wrong ' . $th->getMessage())->error();
            }
        }

    }
    
    public function DeleteCourse($id)
    {
        try {
            $course = $this->myFind($id);
            Storage::disk('public')->delete($course->course_image);
            //$course->coursevideos()->delete();
            $course->delete();
            flash('Successfully Deleted with Course videos')->success();
        } catch (\Throwable $th) {
            flash('Something Went Wrong'. $th->getMessage())->error();
        }
        
    }
}