@extends('admin.layouts.app')
@section('page_title')
<div class="row mb-2">
    <div class="col-sm-6">
        <h1>Course Class</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Course Class</li>
        </ol>
    </div>
</div>
@endsection
@section('content')
<div class="card">

    <div class="card-header">
        <h3 class="card-title">Update Course Class</h3>
        <div class="card-tools">
           

        </div>
    </div>
    <div class="card-body">
        <div class="card-header">
            <form method="POST" action="{{ url("/admin/courseclasses/$course_class_list->id") }}" enctype="multipart/form-data">
                @csrf
                @method("PUT")
                <div class="form-group">
                  <label for="Instructor_name">Class Name</label>
                  <input type="text" name="name" value="{{$course_class_list->name }}"  class="form-control"  placeholder="Enter Course Name">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Course Name</label>
                  <select name="course_id" class="form-control">
                    @foreach ($course_list as $key)
                    <option value="{{$key->id}}"{{$key->id==$course_class_list->course_id? 'selected' :'' }}>{{ $key->name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="Category_name">Class No.</label>
                  <input type="text" name="class_no" value="{{$course_class_list->class_no }}" class="form-control"  placeholder="Enter Class no">
                </div>
              
                <div class="form-group">
                  <label for="Category_name">Class Video</label>
                  <input type="file" name="course_video"> <video width=300px height="150px" controls> 
                    <source src="{{ asset("storage/$course_class_list->course_video") }}" type="video/mp4"> 
                      
                 </video>
                </div>
            
              <!-- /.card-body -->
      
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
              </div>
            </form>

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
    </div>
    <!-- /.card-footer-->
</div>
@endsection