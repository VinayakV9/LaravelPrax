@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row" style="margin-bottom: 20px;">
		<div class="col-md-8">
			<a href="{{ route('students.show') }}"><button class="btn btn-default">Show All</button></a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8 col-md-offset">
			<div class="panel panel-default">
				<div class="panel-heading">
					Student Details
				</div>
				<div class="panel-body">
					<table class="table">
						<tr>
							<td>Id</td>
							<td>{{ $student->id }}</td>
						</tr>
						<tr>
							<td>Name</td>
							<td>{{ $student->name }}</td>
						</tr>
						<tr>
							<td>Email</td>
							<td>{{ $student->email }}</td>
						</tr>
						<tr>
							<td>Gender</td>
							<td>{{ $student->gender }}</td>
						</tr>
						<tr>
							<td>Field</td>
							<td>{{ $student->field }}</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
	

@endsection()