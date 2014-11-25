@extends('layouts.default')

@section('content')
<div class="padding">
	<div class="row">
		<div class="col-lg-4"></div>
		<div class="col-lg-4">
			<div class="well">
			@if(Session::has('flash_message')) 
				<div class="alert alert-danger">
					{{ Session::get('flash_message') }}
				</div>
				@endif
				{{ Form::open(['name' => 'signin_form', 'route' => ['users.signin']]) }}
				<h4>Sign In</h4>
				<div class="form-group">
					{{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Enter your email address']) }}
				</div>
				<div class="form-group">
					{{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Enter your password']) }}
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