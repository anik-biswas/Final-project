<?php
namespace App\Interfaces;
interface ICourseRepository extends IBaseRepository
{
    public function FindCourse($id);
    
    public function CreateCourse($request);
    public function UpdateCourse($request,$id);
    public function DeleteCourse($id);
    public function GetLatestCourseList();
    public function GetSpecialCourseList();
    public function GetCourseList($id);
    //public function GetRandomCourseList();
}