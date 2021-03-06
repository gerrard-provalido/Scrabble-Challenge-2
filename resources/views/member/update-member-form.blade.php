@extends('layouts.master')

@section('title', 'Add New Member')

@section('content')
<!--Error List-->
@if (count($errors) > 0)
<div class="alert alert-danger">
	<ul>
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif
<!--Update form-->
<h1>Update Member Details</h1>
<div class="panel panel-default">
	<div class="panel-body">
		<form action="{{url('updateMember/'.$member->member_id)}}" method="POST">
			{{ csrf_field() }}
			<div class="input-group">
				<span class="input-group-addon" id="name"></span>
				<input type="text" name="name" class="form-control" placeholder="Name" aria-describedby="basic-addon1" value="{{@$member->member_name}}">
			</div>
			<div class="input-group">
				<span class="input-group-addon" id="lastName"></span>
				<input type="text" name="lastName" class="form-control" placeholder="Last Name" aria-describedby="basic-addon1" value="{{@$member->member_last_name}}">
			</div>
			<div class="input-group">
				<span class="input-group-addon" id="mbNum"></span>
				<input type="number" name="mbNum" class="form-control" placeholder="Mobile Number" aria-describedby="basic-addon1" value="{{@$member->member_mobile_number}}">
			</div>
			<input type="submit" name="submitBtn" value="Update Mamber Information">
		</form>
	</div>
</div>
@endsection