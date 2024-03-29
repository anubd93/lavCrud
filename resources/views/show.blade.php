@extends('app')

@section('content')
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<h2>Members Table
			<button type="button" data-target="#addnew" data-toggle="modal" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Member</button>
		</h2>
	</div>
</div>
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<table class="table table-bordered table-responsive table-striped">
			<thead>
				<th>Group ID</th>
				<th>Name</th>
				<th>Table Name</th>
				<th>Status</th>
				<th>Create at</th>
				<th>Updateed at</th>
				<th>Action</th>
			</thead>
			<tbody>
				@foreach($members as $member)
					<tr>
						<td>{{$member->group_id}}</td>
						<td>{{$member->name}}</td>
						<td>{{$member->tbl_name}}</td>
						<td>{{$member->status}}</td>
						<td>{{$member->created_at}}</td>
						<td>{{$member->updated_at}}</td>
						<td><a href="#edit{{$member->id}}" data-toggle="modal" class="btn btn-success"><i class='fa fa-edit'></i> Edit</a> <a href="#delete{{$member->id}}" data-toggle="modal" class="btn btn-danger"><i class='fa fa-trash'></i> Delete</a>
							@include('action')
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection