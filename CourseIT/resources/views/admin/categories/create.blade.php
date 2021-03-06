@extends('admin.layouts.app')

@section('page_title')
<div class="row mb-2">
  <div class="col-sm-6">
    <h1>Category</h1>
  </div>
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="{{url('/admin/dashboard')}}">Dashboard</a></li>
      <li class="breadcrumb-item active">Category</li>
    </ol>
  </div>
</div>
 
@endsection
@section('content')
     <!-- Default box -->
     <div class="card">
       
      <div class="card-header">
        <h3 class="card-title">Category List</h3>
        
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
     
        <form method="POST" action="{{route('categories.store')}}">
          @csrf
          <div class="form-group">
            <label for="exampleInputEmail1">Main Category</label>
            <select name="main_category_id" class="form-control">
              @foreach ($main_category as $key => $item)
                  <option value="{{$key}}" {{old('main_category_id')==strval($key) ? 'seleted' : ''}} >{{$item}}</option>
              @endforeach
            </select>
          </div>
          
          <div class="form-group">
            <label for="Category_name">Category Name</label>
            <input type="text" name="name" value="{{old('name')}}" class="form-control"  placeholder="Enter Category Name">
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