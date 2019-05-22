@extends('layouts.app')
@section('content')

<table class="table table-hover">
	
	<thead>
			<th>Image</th>
			<th>Edit</th>
			<th>Delete</th>
			
	</thead>

	@if($gallary->count() > 0)
	@foreach($gallary as $gallary)
	<tbody>
			<tr>
				<td>
						<img src="{{$gallary->featured}}" height="90px" width="80px">				
				</td>

				<td>
					<a href="{{route('gallary.edit',['id'=>$gallary->id])}}" class="btn btn-primary btn-sm">Edit</a>
				</td>
				<td>
					<a href="{{route('gallary.destroy',['id'=>$gallary->id])}}" class="btn btn-danger btn-sm">Destroy</a>
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