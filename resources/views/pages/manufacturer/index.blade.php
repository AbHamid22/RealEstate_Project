
@extends('layouts.master')
@section('title','Manage Manufacturer')
@section('style')


@endsection
@section('page')
<a href="{{route('manufacturers.create')}}">New Manufacturer</a>
<table class="table table-hover text-nowrap">
	<thead>
		<tr>
			<th>Id</th>
			<th>Name</th>

			<th>Action</th>
		</tr>
	</thead>
	<tbody>
	@foreach($manufacturers as $manufacturer)
		<tr>
			<td>{{$manufacturer->id}}</td>
			<td>{{$manufacturer->name}}</td>

			<td>
			<form action = "{{route('manufacturers.destroy',$manufacturer->id)}}" method = "post">
				<a class= 'btn btn-primary' href = "{{route('manufacturers.show',$manufacturer->id)}}">View</a>
				<a class= 'btn btn-success' href = "{{route('manufacturers.edit',$manufacturer->id)}}"> Edit </a>
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
