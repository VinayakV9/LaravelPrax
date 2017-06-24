@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset">
			<div class="panel panel-default">
				<div class="panel-heading">
					New Student Form
				</div>
				<div class="panel-body">
					<form action="/student" method="POST">
						{{ csrf_field() }}
						<div class="form-group">
							<label>Name</label>
							<input type="text" name="name">
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" name="email">
						</div>
						<div class="form-group">
							<label>Gender : </label><br>
							<input type="radio" name="gender" value="male">
							<label>Male</label>
							<br>
							<input type="radio" name="gender" value="female">
							<label>Female</label>
						</div>
						<div class="form-group">
							<label>Field</label>
							<input type="text" name="field">
						</div>
						<div class="form-group">
							<button class="btn btn-primary" type="submit"> Submit Form</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
	

@endsection()