<?php

namespace App\Http\Controllers\Site;
use App\Interfaces\ICourseRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    protected $courseRepo;

    public function __construct(ICourseRepository $courseRepo)
    {
        $this->courseRepo = $courseRepo;
    }


    public function add_course($course_id)
    {
        $course=$this->courseRepo->myFind($course_id);
        if($course)
        {
            \Cart::add(array(
                'id' => $course->id,
                'name' => $course->name,
                'price' => $course->price_after_discount,
                'quantity' => 1,
                
            ));
            return   redirect("/");
        }else{
          return   redirect("/");
        }
       
    }
}
