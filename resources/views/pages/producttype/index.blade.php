
@extends('layouts.master')
@section('title','Manage ProductType')
@section('style')


@endsection
@section('page')
<a href="{{route('producttypes.create')}}">New ProductType</a>
<table class="table table-hover text-nowrap">
	<thead>
		<tr>
			<th>Id</th>
			<th>Name</th>

			<th>Action</th>
		</tr>
	</thead>
	<tbody>
	@foreach($producttypes as $producttype)
		<tr>
			<td>{{$producttype->id}}</td>
			<td>{{$producttype->name}}</td>

			<td>
			<form action = "{{route('producttypes.destroy',$producttype->id)}}" method = "post">
				<a class= 'btn btn-primary' href = "{{route('producttypes.show',$producttype->id)}}">View</a>
				<a class= 'btn btn-success' href = "{{route('producttypes.edit',$producttype->id)}}"> Edit </a>
				@method('DELETE')
				@csrf
				<input type = "submit" class="btn btn-danger" name = "delete" value = "Delete" />
			</form>
			</td>
		</tr>
	@endforeach
	</tbody>
</table>
@endsection
@section('script')


@endsection
