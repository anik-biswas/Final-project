<?php
namespace App\Interfaces;
interface ICourseClassRepository extends IBaseRepository
{
    public function CreateCourseClass($request);
    public function UpdateCourseClass($request,$id);
    public function DeleteCourseClass($id);
    
}