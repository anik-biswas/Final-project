<?php

namespace App\Http\Controllers\Site;

use App\Enums\MainCategory;
use App\Http\Controllers\Controller;
use App\Enums\CourseType;
use App\Interfaces\ICourseRepository;
use App\Interfaces\ICategoryRepository;
use App\Interfaces\IInstructorRepository;
use App\Interfaces\ICourseClassRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $courseRepo;
    protected $courseclassRepo;
    protected $categoryRepo;
    protected $instructorRepo;
    public function __construct(ICourseRepository $courseRepo,ICourseClassRepository $courseclassRepo,ICategoryRepository $categoryRepo ,IInstructorRepository $instructorRepo)
    {
        $this->courseRepo = $courseRepo;
        $this->categoryRepo = $categoryRepo;
        $this->instructorRepo = $instructorRepo;
        $this->courseclassRepo= $courseclassRepo;
       
    }



    public function index()
    {
        $data["main_category"] = MainCategory::asSelectArray();
        $data["categories"]= $this->categoryRepo->myGet();
        $data['latest_courses']=$this->courseRepo->GetLatestCourseList();
        
        $data['special_courses']=$this->courseRepo->GetSpecialCourseList();
        //$data['random_courses']=$this->courseRepo->GetRandomCourseList();
        return view('site.home',$data);
    }
    
    public function detail($id)
    {
        $data['course']=$this->courseRepo->myFind($id);
        $data["categories"]= $this->categoryRepo->myGet();
        $data["instructors"]= $this->instructorRepo->myGet();
        $data["course_type"] = CourseType::asSelectArray();
        $data["class_list"]= $this->courseclassRepo->myGet();
        $data['special_courses']=$this->courseRepo->GetSpecialCourseList();
     return view('site.coursedetails.detail',$data);
        
    }
    public function classvideo($course_id,$id)
    {
        $data["course_class"]=$this->courseclassRepo->myFind($id);
        $data['course']=$this->courseRepo->myFind($course_id);
        $data["categories"]= $this->categoryRepo->myGet();
        $data["instructors"]= $this->instructorRepo->myGet();
        $data["course_type"] = CourseType::asSelectArray();
        $data["class_list"]= $this->courseclassRepo->myGet();
        $data['special_courses']=$this->courseRepo->GetSpecialCourseList();
        return view('site.courseclass.detail',$data);
    }
}
