<?php

namespace App\Repositories;

use App\Interfaces\IInstructorRepository;
use App\Models\Instructor;

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
      
    }
    public function DeleteInstructor($id)
    {
        try {
            $instructor = $this->myFind($id);
           
            $instructor->delete();
            flash('Successfully Deleted')->success();
        } catch (\Throwable $th) {
            flash('Something Went Wrong')->error();
        }
    }


}