@extends('admin.layouts.app')

@section('page_title')
<div class="row mb-2">
  <div class="col-sm-6">
    <h1>Course</h1>
  </div>
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="{{url('/admin/dashboard')}}">Dashboard</a></li>
      <li class="breadcrumb-item active">Courses</li>
    </ol>
  </div>
</div>
 
@endsection
@section('content')
     <!-- Default box -->
     <div class="card">
       
      <div class="card-header">
        <h3 class="card-title">Courses List</h3>
        
        <div class="card-tools">
          {{-- <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button> --}}
          {{-- <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button> --}}
          <a class="btn btn-success pull-right " href="{{url('/admin/courses/create')}}">Add Course</a>
        </div>
      </div>
      <div class="card-body">
        <table class="table table-bordered" id="myTable">
          <thead>
            <tr>
              <th>Serial</th>
            <th>Name</th>
            <th>Category</th>
            <th>Instructor</th>
            <th>Course Type</th>
            <th>Course Length</th>
            <th>Price</th>
            <th>Discount Price</th>
            <th>Description</th>
            <th>Image</th>
            <th>Action</th>
            </tr>
        </thead>
         @foreach ($course_list as $item)
        <tr>
          <td>{{$i++}}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->category ? $item->category->name : "" }}</td>
            <td>{{ $item->instructor ? $item->instructor->name : "" }}</td>
            <td>{{ App\Enums\CourseType::getDescription($item->course_type_id) }}</td>
            <td>{{ $item->Course_length }}</td>
            <td>{{ $item->price}} Tk</td>
            <td>{{ $item->discount_price}} Tk</td>
            <td>{{ $item->description }}</td>
          <td> <img src="{{ asset("storage/$item->course_image") }}" alt="no" class="" height=50px width=50px ></td> 
           
            <td>

               <span> <a href="{{ url("/admin/courses/$item->id/edit") }}" class="btn btn-info">Edit</a>
             
                <form action="{{ url("/admin/courses/$item->id") }}" method="post" style="display:inline"
                    onSubmit="return confirm('Are you sure you want to delete?')">
                    @csrf
                    @method("delete")
                    <input type="submit" class="btn btn-info" value="Delete">
                </form></span>

            </td>
        </tr>
        @endforeach 
      </table>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        Footer
      </div>
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->
@endsection
@push('stylecss')
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
@endpush
@push('scripts')
    <script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
    $('#myTable').DataTable();
     } );
    </script>
@endpush