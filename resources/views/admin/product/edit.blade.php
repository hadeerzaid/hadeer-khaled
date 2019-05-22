@extends('layouts.app')
@section('content')

@include('admin.include.errors')

<div class="card">
        <div class="card-header"> Edit this product</div>
        <div class="card-body">


<form action="{{route('product.update',['id'=> $product->id]) }}" method="post" enctype="multipart/form-data">

	@csrf
  <div class="form-group">
    <label for="title">Title:</label>
    <input type="text" class="form-control" id="title" name="title" value="{{$product->title}}">
  </div>
  <div class="form-group">
    <label for="featured">image:</label>
    <input type="file" class="form-control" id="fwatured" name="featured">
  </div>

  <div class="form-group">
    
    <label>Select Category</label>
    <select class="form-control" name="category_id">
      @foreach($category as $category)
      <option value="{{$category->id}}" 

        @if($category->id == $product->category->id)
        selected
        @endif
        >{{$category->name}}</option>
      @endforeach
    </select>
  </div>

    <div class="form-group">
    <label for="content">description:</label>
    <textarea cols="6" rows="7" class="form-control" name="description" id="content">{{$product->description}}</textarea>
  </div>

  <div class="form-group">
  	<div class="text-center">
 	<button type="submit" class="btn btn-primary">Update</button>
 	</div>
	</div>
	</form>

    </div>
    </div>
@endsection

