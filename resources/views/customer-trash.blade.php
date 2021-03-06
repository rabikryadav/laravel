<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Trashed Customers</title>
	<style type="text/css">
		.div{
			width: 80%;
			margin-left: 30px;
			margin-right: 30px;
			margin: auto;
		}
	</style>
</head>
<body>
<x-header /><br><br>
<div class="div">
	<a href="{{route('customer.view')}}">
	<button>View Customers</button>
	</a>
	<h2 style="text-align:center">Trashed Customers</h2>
	<table border="1" cellpadding="10" align="center">
		<thead>
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Gender</th>
				<th>Date of Birth</th>
				<th>Address</th>
				<th>State</th>
				<th>Country</th>
				<th>Status</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($customers as $data)
			<tr>
				<td>{{$data->user_name}}</td>
				<td>{{$data->email}}</td>
				<td>
					@if($data->gender == 'M')
					Male
					@elseif($data->gender == 'F')
					Female
					@else
					Other
					@endif
				</td>
				<td>{{$data->dob}}</td>
				<td>{{$data->address}}</td>
				<td>{{$data->state}}</td>
				<td>{{$data->country}}</td>
				<td>
					@if($data->status == '1')
					Active
					@else
					Inactive
					@endif
				</td>
				<td><a href="{{route('customer.restore',['id' => $data->id])}}">Restore</a></td>
				<td><a href="{{route('customer.force.delete',['id' => $data->id])}}">Delete</a></td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

</body>
</html>