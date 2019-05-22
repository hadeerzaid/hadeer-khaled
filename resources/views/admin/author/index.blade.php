@extends('layouts.app')
@section('content')

<table class="table table-hover">
	
	<thead>
			<th>Image</th>
			<th>Name</th>
			<th>Delete</th>
			<th>Edit</th>
	</thead>

	@if($author->count() > 0)
	@foreach($author as $author)
	<tbody>
			<tr>
				<td>

						<img src="{{$author->featured}}" height="90px" width="80px">
					
					
				</td>

				<td>
					{{$author->name}}

				</td>

				<td>
						<a href="{{route('author.edit',['id'=>$author->id])}}" class="btn btn-primary btn-sm">Edit</a>
				</td>
				<td>
					<a href="{{route('author.destroy',['id'=>$author->id])}}" class="btn btn-danger btn-sm">Destroy</a>
				</td>

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