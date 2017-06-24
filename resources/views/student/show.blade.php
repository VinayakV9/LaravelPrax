@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row" style="margin-bottom: 20px">
		<div class="col-md-8">
			<a href="{{ route('student.create') }}">
				<button class="btn btn-default">Create New Student</button>
			</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8 col-md-offset">
			<div class="panel panel-default">
				<div class="panel-heading">
					All Students Details
				</div>
				<div class="panel-body">
					<table class="table table-stripped">
						<thead>
							<tr>
								<th>Id</th>
								<th>Name</th>
								<th>Email</th>
								<th>Gender</th>
								<th>Field</th>
								<th>Link</th>
							</th>
						</thead>

						<tbody>
							@foreach($students as $student)
								<tr>
									<td>{{ $student->id }}</td>
									<td>{{ $student->name }}</td>
									<td>{{ $student->email }}</td>
									<td>{{ $student->gender }}</td>
									<td>{{ $student->field }}</td>	
									<td><a href="{{ url()->current().'/'.$student->id }}"> Details </a>
								</tr>
								
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
	

@endsection()