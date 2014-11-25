@extends('layouts.default')

@section('content')
<div class="padding">
	<div class="row">
		<div class="col-lg-4"></div>
		<div class="col-lg-4">
			<div class="well"> 
				<form class="">
					<h4>Sign-up</h4>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="First Name">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Last Name">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Enter your email address">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Enter your password">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Confirm password">
					</div>	
					<div class="form-group">
						<input type="button" class="btn btn-primary" value="Submit">
					</div>
				</form>
			</div>
		</div>
		<div class="col-lg-4"></div>

	</div>
</div>
@stop