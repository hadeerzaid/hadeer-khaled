@extends('layouts.app')
@section('content')

@include('admin.include.errors')

<div class="card">
        <div class="card-header">Create new product</div>
        <div class="card-body">

<form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
	@csrf
  <div class="form-group">
    <label for="title">Title:</label>
    <input type="text" class="form-control" id="title" name="title">
  </div>
  <div class="form-group">
    <label for="featured">image:</label>
    <input type="file" class="form-control" id="featured" name="featured">
  </div>

  <div class="form-group">
    
    <label>Select Category</label>
    <select class="form-control" name="category_id">
      @foreach($category as $category)
      <option value="{{$category->id}}">{{$category->name}}</option>
      @endforeach
    </select>
  </div>

  

    <div class="form-group">
    <label for="content">Description:</label>
    <textarea cols="6" rows="7" class="form-control" name="description" id="content"></textarea>
  </div>

  <div class="form-group">
  	<div class="text-center">
 	<button type="submit" class="btn btn-primary">Submit</button>
 	</div>
	</div>
	</form>

    </div>
    </div>
@endsection


