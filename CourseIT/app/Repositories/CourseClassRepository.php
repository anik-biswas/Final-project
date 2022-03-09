<?php

namespace App\Repositories;

use App\Interfaces\ICourseClassRepository;
use Illuminate\Support\Facades\Storage;
use App\Models\CourseClass;


class CourseClassRepository extends BaseRepository implements ICourseClassRepository
{
    protected $model;

    public function __construct(CourseClass $model)
    {
        parent::__construct($model);
    }

    public function CreateCourseClass($request)
   
    {
        try {
              if ($request->hasFile('course_video')) {
                $path = $request->file('course_video')->store('course_video', 'public');
              } else {
                $path = null;
                     }
            $course_class = $this->model;
            $course_class->name = $request->name;
            $course_class->course_id = $request->course_id;
            $course_class->class_no = $request->class_no;
            $course_class->course_video = $path;
            $course_class->save();
            flash('Successfully Created')->success(); 
        } catch (\Throwable $th) {
            flash('Something went wrong ' . $th->getMessage())->error();
        } 
    }
    public function UpdateCourseClass($request, $id)
    {
        $course_class = $this->myFind($id);
        if(!$course_class){
            return false;
        }
        else{

            try {
                if ($request->hasFile('course_video')) {
                    $path = $request->file('course_video')->store('course_video', 'public');
                    $course_class->course_video = $path;
                } else {
                    unset($request['course_video']);
                }
            
                $course_class->name = $request->name;
                $course_class->course_id = $request->course_id;
                $course_class->class_no = $request->class_no;
                $course_class->save();
                
                flash('Successfully Updated')->success(); 
                return true;
            } catch (\Throwable $th) {
                flash('Something went wrong ' . $th->getMessage())->error();
            }
        }
    }
    public function DeleteCourseClass($id)
    {
        try {
            $course_class = $this->myFind($id);
            Storage::disk('public')->delete($course_class->course_video);
            $course_class->delete();
            flash('Successfully Deleted ')->success();
        } catch (\Throwable $th) {
            flash('Something Went Wrong'. $th->getMessage())->error();
        }
        
    }
    


}