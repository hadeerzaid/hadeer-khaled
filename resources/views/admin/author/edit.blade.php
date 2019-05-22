@extends('layouts.app')
@section('content')

@include('admin.include.errors')

<div class="card">
        <div class="card-header">Edit Authors</div>
        <div class="card-body">

<form action="{{route('author.update',['id'=>$author->id])}}" method="post" enctype="multipart/form-data">
	@csrf
  <div class="form-group">
    <label for="title">name:</label>
    <input type="text" class="form-control" id="name" name="name" value="{{$author->name}}">
  </div>
  <div class="form-group">
    <label for="featured">image:</label>
    <input type="file" class="form-control" id="featured" name="featured">
  </div>
  

    <div class="form-group">
    <label for="content">About:</label>
    <textarea cols="6" rows="7" class="form-control" name="about" id="content">{{$author->about}}</textarea>
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


