
@extends('layouts.master')
@section('title','Manage User')
@section('style')


@endsection
@section('page')
<a href="{{route('users.create')}}">New User</a>
<table class="table table-hover text-nowrap">
	<thead>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Email</th>
			<th>Email Verified At</th>
			<th>Password</th>
			<th>Remember Token</th>
			<th>Created At</th>
			<th>Updated At</th>

			<th>Action</th>
		</tr>
	</thead>
	<tbody>
	@foreach($users as $user)
		<tr>
			<td>{{$user->id}}</td>
			<td>{{$user->name}}</td>
			<td>{{$user->email}}</td>
			<td>{{$user->email_verified_at}}</td>
			<td>{{$user->password}}</td>
			<td>{{$user->remember_token}}</td>
			<td>{{$user->created_at}}</td>
			<td>{{$user->updated_at}}</td>

			<td>
			<form action = "{{route('users.destroy',$user->id)}}" method = "post">
				<a class= 'btn btn-primary' href = "{{route('users.show',$user->id)}}">View</a>
				<a class= 'btn btn-success' href = "{{route('users.edit',$user->id)}}"> Edit </a>
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
    {{ $users->links('vendor.pagination.bootstrap-4') }}
</div>
@endsection
@section('script')


@endsection
