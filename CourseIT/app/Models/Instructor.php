<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;
    public function courses()
    {
        return $this->hasMany(Course::class , "instructor_id", "id");
    }
    public function courseclasses()
    {
        return $this->hasMany(CourseClass::class,"course_id", "id");
    }
    
    
}
