<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CourseClassRequest;
use App\Http\Requests\CourseRequest;
use App\Interfaces\ICourseClassRepository;
use App\Interfaces\ICourseRepository;

use Illuminate\Http\Request;

class CourseClassController extends Controller
{
    protected $course_classRepo;
    protected $courseRepo;
    public function __construct(ICourseClassRepository $course_classRepo,ICourseRepository $courseRepo)
    {
        $this->course_classRepo = $course_classRepo;
        $this->courseRepo = $courseRepo;
    }

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        $data["course_class_list"]=$this->course_classRepo->myGet();
        return view('admin.courseclasses.index',$data)->with('i', 1);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data["course_list"] = $this->courseRepo->myGet();
        return view('admin.courseclasses.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CourseClassRequest $request)
    {
        $this->course_classRepo->CreateCourseClass($request);
        return redirect('/admin/courseclasses');
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
        $course_class_list = $this->course_classRepo->myFind($id);
        if (!$course_class_list) {
            return redirect('/admin/courseclasses');
        }

        $data["course_class_list"] = $course_class_list;
        
        $data["course_list"] = $this->courseRepo->myGet();

        
        return view('admin.courseclasses.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CourseClassRequest $request, $id)
    {
        $status = $this->course_classRepo->UpdateCourseClass($request,$id);
        return redirect('/admin/courseclasses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->course_classRepo->DeleteCourseClass($id);
        return redirect('/admin/courseclasses');
    }
}
