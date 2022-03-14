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
        <h3 class="card-title">Add Course </h3>
        
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
     
        <form method="POST" action="{{route('courses.store')}}" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="Instructor_name">Course Name</label>
            <input type="text" name="name" value="{{old('name')}}" class="form-control"  placeholder="Enter Course Name">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Category</label>
            <select name="category_id" class="form-control">
              @foreach ($categories as $key => $item)
              <option value="{{ $item->id }}">{{ $item->name }}</option>
              @endforeach
            </select>
          </div> 
          <div class="form-group">
            <label for="exampleInputEmail1">Instructor</label>
            <select name="instructor_id" class="form-control">
              @foreach ($instructors as $key => $item)
              <option value="{{ $item->id }}">{{ $item->name }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Course Type</label>
            <select name="course_type_id" class="form-control">
              @foreach ($course_type as $key => $item)
                <option value="{{$key}}" {{old('course_type_id')==strval($key) ? 'seleted' : ''}} >{{$item}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="Category_name">Course Length</label>
            <input type="text" name="Course_length" value="{{old('Course_length')}}" class="form-control"  placeholder="Enter price">
          </div>
          <div class="form-group">
            <label for="Category_name">Price</label>
            <input type="text" name="price" value="{{old('price')}}" class="form-control"  placeholder="Enter price">
          </div>
          <div class="form-group">
            <label for="Category_name">Discount Price</label>
            <input type="text" name="discount_price" value="{{old('discount_price')}}" class="form-control"  placeholder="Enter discount Price">
          </div>
          <div class="form-group">
            <label for="Category_name">Description</label>
            <textarea name="description" class="form-control"> {{ old('description')}} </textarea>
          </div>
          <div class="form-group">
            <label for="Category_name">course Front  Image</label>
            <input type="file" name="course_image">
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