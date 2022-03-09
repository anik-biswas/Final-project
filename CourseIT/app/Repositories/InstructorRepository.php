<?php

namespace App\Repositories;

use App\Interfaces\IInstructorRepository;
use App\Models\Course;
use App\Models\CourseClass;
use App\Models\Instructor;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Stmt\TryCatch;

class InstructorRepository extends BaseRepository implements IInstructorRepository
{
    protected $model;

    public function __construct(Instructor $model)
    {
       parent::__construct($model);
    }
    public function CreateInstructor($request)
    {
        try {
            if ($request->hasFile('image')) {
                $path = $request->file('image')->store('instructor_images', 'public');
            } else {
                $path = null;
            }
        $instructor = $this->model;
        $instructor->name = $request->name;
        $instructor->skill = $request->skill;
        $instructor->email = $request->email;
        $instructor->Phone = $request->phone;
        $instructor->description = $request->description;
        $instructor->image = $path;
        $instructor->save();
        flash('Successfully Created')->success(); 

        } catch (\Throwable $th) {
            flash('Something went wrong ' . $th->getMessage())->error();
        } 
    }



    public function UpdateInstructor($request, $id)
    {
        $instructor = $this->myFind($id);
        if(!$instructor){
            return false;
        }
        else{

        try {
            if ($request->hasFile('image')) {
                $path = $request->file('image')->store('instructor_images', 'public');
                $instructor->image = $path;
            } else {
                unset($request['image']);
            }
    
            $instructor->name = $request->name;
            $instructor->email = $request->email;
            $instructor->phone = $request->phone;
            $instructor->skill = $request->skill;
            $instructor->description = $request->description;
           
            $instructor->save();
            flash('Successfully Updated')->success();
            return true;
        } catch (\Throwable $th) {
            flash('Something went wrong ' . $th->getMessage())->error();
        }
    }
    }
    public function DeleteInstructor($id)

    {
        try {
            $instructor = $this->myFind($id);
            
            $instructor->courses()->delete();
            Storage::disk('public')->delete($instructor->image);
            $instructor->delete();
            flash('Successfully Deleted with Courses')->success();
        } catch (\Throwable $th) {
            flash('Something Went Wrong'. $th->getMessage())->error();
        } 
         
    }
     
    
} 