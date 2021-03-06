@extends('layouts.app')
@section('content')

<table class="table table-hover">
	
	<thead>
			<th>Category Name</th>
			<th>Edit</th>
			<th>Delete</th>
	</thead>
	@if(count($category) > 0)
	@foreach($category as $category)
	<tbody>
			<tr>
				<td>
					{{$category->name}}
				</td>

				<td><a href="{{route('category.edit',['id'=>$category->id])}}" class="btn btn-primary btn-sm">Edit</a></td>
				<td><a href="{{route('category.delete',['id'=>$category->id])}}" class="btn btn-danger btn-sm">Delete</a></td>

			</tr>
	</tbody>
	@endforeach
	@else
	<tr>
		<th colspan="5" class="text-center text-danger h1">No Item To Shown</th>
	</tr>
	@endif

</table>



@endsection