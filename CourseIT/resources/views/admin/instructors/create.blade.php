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
         
        </div>
      </div>
      <div class="card-body">
     
        <form method="POST" action="{{route('instructors.store')}}" enctype="multipart/form-data">
          @csrf
          
          <div class="form-group">
            <label for="Instructor_name">Instructor Name</label>
            <input type="text" name="name" value="{{old('name')}}" class="form-control"  placeholder="Enter Instructor Name">
          </div>
          <div class="form-group">
            <label for="Category_name">Email</label>
            <input type="text" name="email" value="{{old('email')}}" class="form-control"  placeholder="Enter Email">
          </div>
          <div class="form-group">
            <label for="Category_name">Phone Number</label>
            <input type="text" name="phone" value="{{old('phone')}}" class="form-control"  placeholder="Enter Phone Number">
          </div>
          <div class="form-group">
            <label for="Category_name">Skill</label>
            <input type="text" name="skill" value="{{old('skill')}}" class="form-control"  placeholder="Skill">
          </div>
          
          <div class="form-group">
            <label for="Category_name">Description</label>
            <textarea name="description" class="form-control"> {{ old('description')}} </textarea>
          </div>
          <div class="form-group">
            <label for="Category_name">Featured Image</label>
            <input type="file" name="image">
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