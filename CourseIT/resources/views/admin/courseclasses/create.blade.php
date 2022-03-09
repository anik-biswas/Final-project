@extends('admin.layouts.app')

@section('page_title')
<div class="row mb-2">
  <div class="col-sm-6">
    <h1>Course</h1>
  </div>
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="{{url('/admin/dashboard')}}">Dashboard</a></li>
      <li class="breadcrumb-item active">Course</li>
    </ol>
  </div>
</div>
 
@endsection
@section('content')
     <!-- Default box -->
     <div class="card">
       
      <div class="card-header">
        <h3 class="card-title">Course Class List</h3>
        
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          {{-- <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button> --}}
         
        </div>
      </div>
      <div class="card-body">
     
        <form method="POST" action="{{route('courseclasses.store')}}" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="Instructor_name">Class Name</label>
            <input type="text" name="name" value="{{old('name')}}" class="form-control"  placeholder="Enter Course Name">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Course Name</label>
            <select name="course_id" class="form-control">
              @foreach ($course_list as $key => $item)
              <option value="{{ $item->id }}">{{ $item->name }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="Category_name">Class No.</label>
            <input type="text" name="class_no" value="{{old('class_no')}}" class="form-control"  placeholder="Enter price">
          </div>
        
          <div class="form-group">
            <label for="Category_name">Class Video</label>
            <input type="file" name="course_video">
          </div>
      
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Create</button>
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
      <!-- /.card-body -->
      <div class="card-footer">
        Footer
      </div>
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->
@endsection