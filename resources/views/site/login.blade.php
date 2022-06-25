@extends('layouts.site')
@section('title',__('Login'))

@section('content')
	
	@if(session('status'))
		<div class="alert alert-info alert-dismissible text-center" role="alert">
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  <strong>Warning!</strong> {{ session('status') }}
		</div>
	@endif
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>{{ __('Login to your account') }}</h2>
						<form action="{{ route('site-user-engage') }}" method="POST">
							@csrf
							<input type="hidden" 
								name="engageType" 
								id="engageType" 
								value="login">
							<input type="email" 
								placeholder="{{ __('Enter email') }}">
							<input type="password" 
								name="password" 
								id="password" 
								placeholder="{{__('Enter Password') }}">
							<span>
								<input type="checkbox" class="checkbox"> 
								{{ __("Keep me signed in") }}
							</span>
							<button type="submit" class="btn btn-default">{{ __('Login') }}</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">{{ __('OR') }}</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>{{ __('New User Signup!') }}</h2>
						<form action="{{ route('site-user-engage') }}" method="POST">
							@csrf
							<input type="hidden" name="engageType" id="engageType" value="signup">
							<input type="text" placeholder="{{ __('First Name') }}" id="name" name="name"/>
							<input type="text" placeholder="{{ __('Last Name') }}" id="name" name="name"/>
							<input type="email" placeholder="{{ __('Email Address') }}" id="email" name="email"/>
							<input type="password" placeholder="{{ __('Password') }}" id="password" name="password"/>
							<input type="password" placeholder="{{ __('confirm Password') }}" id="confirm_password" name="confirm_password"/>
							<button type="submit" class="btn btn-default">{{ __('Signup') }}</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
@endsection