<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClassDetailController extends Controller
{
    public function index()
    {
      
        //$data['random_courses']=$this->courseRepo->GetRandomCourseList();
        return view('site.coursedetails.detail');
    }
}
