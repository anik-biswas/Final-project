<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\instructorRequest;
use App\Interfaces\IInstructorRepository;
use App\Models\Instructor;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
    protected $instructorRepo;


    public function __construct(IInstructorRepository $instructorRepo)
    {
        $this->instructorRepo = $instructorRepo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data["instructor_list"] = $this->instructorRepo->myGet();
        return view('admin.instructors.index',$data)->with('i', 1);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('admin.instructors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(instructorRequest $request)
    {
        $this->instructorRepo->CreateInstructor($request);
        return redirect('/admin/instructors');
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
        $instructor = $this->instructorRepo->myFind($id);
        if (!$instructor) {
            return redirect('/admin/instructors');
        }
        $data["instructor"] = $instructor;
        return view('admin.instructors.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(instructorRequest $request, $id)
    {
        $status = $this->instructorRepo->UpdateInstructor($request,$id);
        return redirect('/admin/instructors');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->instructorRepo->DeleteInstructor($id);
        return redirect('/admin/instructors');
    }
}
