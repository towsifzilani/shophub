@extends('layouts.landing')
@section('title',__('Login'))

@section('content')
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
							<input type="email" placeholder="Enter Email"/>
							<input type="password" placeholder="Enter Password"/>
							<span>
								<input type="checkbox" class="checkbox"> 
								Keep me signed in
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
							<input type="text" placeholder="Name"/>
							<input type="email" placeholder="Email Address"/>
							<input type="password" placeholder="Password"/>
							<input type="password" placeholder="confirm Password"/>
							<button type="submit" class="btn btn-default">{{ __('Signup') }}</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
@endsection