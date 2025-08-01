
@extends('layouts.master')
@section('title','Create Warehouse')
@section('style')


@endsection
@section('page')
<a class='btn btn-success' href="{{route('warehouses.index')}}">Manage</a>
<form action="{{route('warehouses.store')}}" method ="post" enctype="multipart/form-data">
@csrf
<div class="row mb-3">
	<label for="name" class="col-sm-2 col-form-label">Name</label>
	<div class="col-sm-10">
		<input type = "text" class="form-control" name="name" id="name" placeholder="Name">
	</div>
</div>
<div class="row mb-3">
	<label for="city" class="col-sm-2 col-form-label">City</label>
	<div class="col-sm-10">
		<input type = "text" class="form-control" name="city" id="city" placeholder="City">
	</div>
</div>
<div class="row mb-3">
	<label for="contact" class="col-sm-2 col-form-label">Contact</label>
	<div class="col-sm-10">
		<input type = "text" class="form-control" name="contact" id="contact" placeholder="Contact">
	</div>
</div>

<button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection
@section('script')


@endsection
