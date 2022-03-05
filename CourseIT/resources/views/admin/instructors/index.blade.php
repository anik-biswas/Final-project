@extends('admin.layouts.app')

@section('page_title')
<div class="row mb-2">
  <div class="col-sm-6">
    <h1>Instructor</h1>
  </div>
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="{{url('/admin/dashboard')}}">Dashboard</a></li>
      <li class="breadcrumb-item active">Instructor</li>
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
          <a class="btn btn-success pull-right " href="{{url('/admin/instructors/create')}}">Add Instructor</a>
        </div>
      </div>
      <div class="card-body">
        <table class="table table-bordered">
          <tr>
              <td>Name</td>
              <td>Email</td>
              <td>Skill</td>
              <td>Phone</td>
              <td>Description</td>
              <td>Image</td>
              <td>Action</td>
          </tr>
           @foreach ($instructor_list as $item)
          <tr>
              <td>{{ $item->name }}</td>
              <td>{{ $item->email }}</td>
              <td>{{ $item->skill }}</td>
              <td>{{ $item->phone }}</td>
              <td>{{ $item->description }}</td>
            <td> <img src="{{ asset("storage/$item->image") }}" alt="no" class="" height=50px width=50px ></td> 
             
              <td>

                  <a href="{{ url("/admin/instructors/$item->id/edit") }}" class="btn btn-info">Edit</a>
               
                  <form action="{{ url("/admin/instructors/$item->id") }}" method="post" style="display:inline"
                      onSubmit="return confirm('Are you sure you want to delete?')">
                      @csrf
                      @method("delete")
                      <input type="submit" class="btn btn-info" value="Delete">
                  </form>

              </td>
          </tr>
          @endforeach 
      </table>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
    
      </div>
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->
@endsection