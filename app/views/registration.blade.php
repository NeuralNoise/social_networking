@extends('layouts.default')

@section('content')
<div class="padding">
	<div class="row">
		<div class="col-lg-4"></div>
		<div class="col-lg-4">
			<div class="well"> 
				{{ Form::open(['name' => 'registration_form', 'route' => ['users.registration']]) }}
				<h4>Sign-up</h4>
				<div class="form-group">
					{{ Form::text('first_name', null, ['class' => 'form-control', 'placeholder' => 'First Name']) }}
				</div>
				<div class="form-group">
					{{ Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => 'Last Name']) }}
				</div>
				<div class="form-group">
					{{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Enter your email address']) }}
				</div>
				<div class="form-group">
					{{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Enter your password']) }}
				</div>
				<div class="form-group">
					{{ Form::password('confirm_password', ['class' => 'form-control', 'placeholder' => 'Confirm password']) }}
				</div>	
				<div class="form-group">
					<input type="submit" class="btn btn-primary" value="Submit">
				</div>
				{{ Form::close() }}
			</div>
		</div>
		<div class="col-lg-4"></div>

	</div>
</div>
@stop