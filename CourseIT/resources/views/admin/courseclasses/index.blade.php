@extends('admin.layouts.app')

@section('page_title')
<div class="row mb-2">
  <div class="col-sm-6">
    <h1>Course Class</h1>
  </div>
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="{{url('/admin/dashboard')}}">Dashboard</a></li>
      <li class="breadcrumb-item active">Course Class</li>
    </ol>
  </div>
</div>
 
@endsection
@section('content')
     <!-- Default box -->
     <div class="card">
       
      <div class="card-header">
        <h3 class="card-title">Instructor List</h3>
        
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          {{-- <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button> --}}
          <a class="btn btn-success pull-right " href="{{url('/admin/courseclasses/create')}}">Add Class</a>
        </div>
      </div>
      <div class="card-body">
        <table class="table table-bordered" id="myTable">
          <thead>
            <tr>
              <th>Serial</th>
              <th>Course Name</th>
              <th>Class No.</th>
              <th>Class Name</th>
              <th>Course Video</th>
              <th>Action</th>
          </tr>
          </thead>
         
          @foreach ($course_class_list as $item)
        <tr>
            <td>{{$i++}}</td>
            <td>{{ $item->courses? $item->courses->name : "" }}</td>
            <td>{{ $item->class_no }}</td>
            <td>{{ $item->name }}</td>
            <td>	<video width=200px height="80px" controls> 
              <source src="{{ asset("storage/$item->course_video") }}" type="video/mp4"> 
                
           </video> </td>
          
           
            <td>

               <span> <a href="{{ url("/admin/courseclasses/$item->id/edit") }}" class="btn btn-info">Edit</a>
             
                <form action="{{ url("/admin/courseclasses/$item->id") }}" method="post" style="display:inline"
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