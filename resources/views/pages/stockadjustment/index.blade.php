
@extends('layouts.master')
@section('title','Manage StockAdjustment')
@section('style')


@endsection
@section('page')
<a href="{{route('stockadjustments.create')}}">New StockAdjustment</a>
<table class="table table-hover text-nowrap">
	<thead>
		<tr>
			<th>Id</th>
			<th>Adjustment At</th>
			<th>User Id</th>
			<th>Remark</th>
			<th>Adjustment Type Id</th>
			<th>Warehouse Id</th>

			<th>Action</th>
		</tr>
	</thead>
	<tbody>
	@foreach($stockadjustments as $stockadjustment)
		<tr>
			<td>{{$stockadjustment->id}}</td>
			<td>{{$stockadjustment->adjustment_at}}</td>
			<td>{{$stockadjustment->user_id}}</td>
			<td>{{$stockadjustment->remark}}</td>
			<td>{{$stockadjustment->adjustment_type_id}}</td>
			<td>{{$stockadjustment->warehouse_id}}</td>

			<td>
			<form action = "{{route('stockadjustments.destroy',$stockadjustment->id)}}" method = "post">
				<a class= 'btn btn-primary' href = "{{route('stockadjustments.show',$stockadjustment->id)}}">View</a>
				<a class= 'btn btn-success' href = "{{route('stockadjustments.edit',$stockadjustment->id)}}"> Edit </a>
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
