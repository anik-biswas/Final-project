<?php
namespace App\Interfaces;
interface ICourseRepository extends IBaseRepository
{
    
    public function CreateCourse($request);
    public function UpdateCourse($request,$id);
    public function DeleteCourse($id);
}