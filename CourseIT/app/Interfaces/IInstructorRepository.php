<?php
namespace App\Interfaces;
interface IInstructorRepository extends IBaseRepository
{
    public function CreateInstructor($request);
    public function UpdateInstructor($request,$id);
    public function DeleteInstructor($id);
    
}