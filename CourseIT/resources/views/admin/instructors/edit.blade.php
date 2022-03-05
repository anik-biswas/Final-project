@extends('admin.layouts.app')
@section('page_title')
<div class="row mb-2">
    <div class="col-sm-6">
        <h1>Category</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">instructor</li>
        </ol>
    </div>
</div>
@endsection
@section('content')
<div class="card">

    <div class="card-header">
        <h3 class="card-title">Update Instructor</h3>
        <div class="card-tools">
           

        </div>
    </div>
    <div class="card-body">
        <div class="card-header">
            <form method="POST" action="{{ url("/admin/instructors/$instructor->id") }}" enctype="multipart/form-data">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="exampleInputEmail1">instructor Name</label>
                    <input type="text" name="name" value="{{ $instructor->name }}" class="form-control"
                        placeholder="Enter Instructor Name">
                </div>
                <div class="form-group">
                    <label for="Category_name">Email</label>
                    <input type="text" name="email" value="{{$instructor->email}}" class="form-control"  placeholder="Enter Email">
                  </div>
                  <div class="form-group">
                    <label for="Category_name">Phone Number</label>
                    <input type="text" name="phone" value="{{$instructor->phone}}" class="form-control"  placeholder="Enter Phone Number">
                  </div>
                  <div class="form-group">
                    <label for="Category_name">Skill</label>
                    <input type="text" name="skill" value="{{$instructor->skill}}" class="form-control"  placeholder="Skill">
                  </div>
                  
                  <div class="form-group">
                    <label for="Category_name">Description</label>
                    <textarea name="description" class="form-control"> {{ $instructor->description}} </textarea>
                  </div>
                  <div class="form-group">
                    <label for="Category_name">Featured Image</label>
                    <input type="file" name="image"><img src="{{ asset("storage/$instructor->image") }}" alt="no" class="" height=50px width=50px >
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