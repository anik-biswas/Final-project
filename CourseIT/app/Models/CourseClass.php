<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseClass extends Model
{
    use HasFactory;
    public function courses()
    {
        return $this->belongsTo(Course::class , "course_id", "id");
    }
    public function instructor()
    {
    return $this->belongsTo(Instructor::class, "instructor_id", "id");
    }
}
