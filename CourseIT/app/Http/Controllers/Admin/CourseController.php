<?php

namespace App\Http\Controllers\Admin;
use App\Enums\MainCategory;
use App\Enums\CourseType;
use App\Http\Controllers\Controller;
use App\Http\Requests\CourseRequest;
use App\Interfaces\ICategoryRepository;
use App\Interfaces\IInstructorRepository;
use App\Interfaces\ICourseRepository;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    protected $courseRepo;
    protected $categoryRepo;
    protected $instructorRepo;

    public function __construct(ICourseRepository $courseRepo, ICategoryRepository $categoryRepo ,IInstructorRepository $instructorRepo )
    {
        $this->courseRepo = $courseRepo;
        $this->categoryRepo = $categoryRepo;
        $this->instructorRepo = $instructorRepo;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $data["course_list"] = $this->courseRepo->myGet();
        return view('admin.courses.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        $data["categories"]= $this->categoryRepo->myGet();
        $data["instructors"]= $this->instructorRepo->myGet();
        $data["course_type"] = CourseType::asSelectArray();

        return view('admin.courses.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CourseRequest $request)
    {
        $this->courseRepo->CreateCourse($request);
        return redirect('/admin/courses');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = $this->courseRepo->myFind($id);
        if (!$course) {
            return redirect('/admin/courses');
        }

        $data["course"] = $course;
        
        $data["categories"]= $this->categoryRepo->myGet();
        $data["instructors"]= $this->instructorRepo->myGet();
        $data["course_type"] = CourseType::asSelectArray();

        
        return view('admin.courses.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(courseRequest $request, $id)
    {
        $status = $this->courseRepo->UpdateCourse($request,$id);
        return redirect('/admin/courses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->courseRepo->DeleteCourse($id);
        return redirect('/admin/courses');
    }
}
