<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    public function category()
    {
        return $this->belongsTo(Category::class , "category_id", "id");
    }
    public function instructor()
    {
        return $this->belongsTo(Instructor::class , "instructor_id", "id");
    }
    public function courseclasses()
    {
        return $this->hasMany(CourseClass::class , "course_id", "id");
    }
    public function getPriceAfterDiscountAttribute()
    {
        return $this->price - $this->discount_price;
    }
}
