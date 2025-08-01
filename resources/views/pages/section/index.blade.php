
@extends('layouts.master')
@section('title','Manage Section')
@section('style')


@endsection
@section('page')
<a href="{{route('sections.create')}}">New Section</a>
<table class="table table-hover text-nowrap">
	<thead>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Description</th>
			<th>Created At</th>
			<th>Updated At</th>

			<th>Action</th>
		</tr>
	</thead>
	<tbody>
	@foreach($sections as $section)
		<tr>
			<td>{{$section->id}}</td>
			<td>{{$section->name}}</td>
			<td>{{$section->description}}</td>
			<td>{{$section->created_at}}</td>
			<td>{{$section->updated_at}}</td>

			<td>
			<form action = "{{route('sections.destroy',$section->id)}}" method = "post">
				<a class= 'btn btn-primary' href = "{{route('sections.show',$section->id)}}">View</a>
				<a class= 'btn btn-success' href = "{{route('sections.edit',$section->id)}}"> Edit </a>
				@method('DELETE')
				@csrf
				<input type = "submit" class="btn btn-danger" name = "delete" value = "Delete" />
			</form>
			</td>
		</tr>
	@endforeach
	</tbody>
</table>

<div class="d-flex justify-content-center mt-2">
    {{ $sections->links('vendor.pagination.bootstrap-4') }}
</div>
@endsection
@section('script')


@endsection
