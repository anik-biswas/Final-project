@extends('admin.layouts.app')
@section('page_title')
<div class="row mb-2">
    <div class="col-sm-6">
        <h1>Category</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Course</li>
        </ol>
    </div>
</div>
@endsection
@section('content')
<div class="card">

    <div class="card-header">
        <h3 class="card-title">Update Course</h3>
        <div class="card-tools">
           

        </div>
    </div>
    <div class="card-body">
        <div class="card-header">
            <form method="POST" action="{{ url("/admin/courses/$course->id") }}" enctype="multipart/form-data">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="Instructor_name">Course Name</label>
                    <input type="text" name="name" value="{{$course->name }}" class="form-control"  placeholder="Enter Course Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Category</label>
                    <select name="category_id" class="form-control">
                      @foreach ($categories as $key)
                      <option value="{{$key->id}}"{{$key->id==$course->category_id? 'selected' :'' }}>{{ $key->name }}</option>
                      @endforeach
                    </select>
                  </div> 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Instructor</label>
                    <select name="instructor_id" class="form-control">
                      @foreach ($instructors as $key)
                      <option value="{{ $key->id}}" {{$key->id==$course->instructor_id? 'selected' :'' }}>{{ $key->name }}</option>
                      @endforeach
                    </select>
                  </div> 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Course Type</label>
                    <select name="course_type_id" class="form-control">
                      @foreach ($course_type as $key=>$item)
                        <option value="{{$key}}" {{ $course->course_type_id == strval($key) ? 'selected' : '' }}>{{$item}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="Category_name">Course Length</label>
                    <input type="text" name="Course_length" value="{{$course->Course_length}}" class="form-control"  placeholder="Enter price">
                  </div>
                  <div class="form-group">
                    <label for="Category_name">Price</label>
                    <input type="text" name="price" value="{{$course->price}}" class="form-control"  placeholder="Enter price">
                  </div>
                  <div class="form-group">
                    <label for="Category_name">Discount Price</label>
                    <input type="text" name="discount_price" value="{{$course->discount_price}}" class="form-control"  placeholder="Enter discount Price">
                  </div>
                  <div class="form-group">
                    <label for="Category_name">Description</label>
                    <textarea name="description" class="form-control"> {{ $course->description}} </textarea>
                  </div>
                  <div class="form-group">
                    <label for="Category_name">course Front  Image</label>
                    <input type="file" name="course_image"> <img src="{{ asset("storage/$course->course_image") }}" alt="" class="" height=50px width=50px >
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