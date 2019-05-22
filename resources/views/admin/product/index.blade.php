@extends('layouts.app')
@section('content')

<table class="table table-hover">
	
	<thead>
			<th>Image</th>
			<th>Title</th>
			<th>Delete</th>
			<th>Edit</th>
	</thead>

	@if($product->count() > 0)
	@foreach($product as $product)
	<tbody>
			<tr>
				<td>

						<img src="{{$product->featured}}" height="90px" width="80px">
					
					
				</td>

				<td>
					{{$product->title}}

				</td>

				<td>
						<a href="{{route('product.edit',['id'=>$product->id])}}" class="btn btn-primary btn-sm">Edit</a>
				</td>
				<td>
					<a href="{{route('product.destroy',['id'=>$product->id])}}" class="btn btn-danger btn-sm">Destroy</a>
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