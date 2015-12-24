@if (Auth::check())
	<div class="container">
		<div class="adminbar">
			<p>Welcome {!! Auth::user()->name  !!}</p>
			<p>{!! Html::link('auth/logout', 'Logout','') !!}</p>
		</div>
	</div>
@endif

@unless (Auth::check())

	<div class="container">
		<div class="adminbar">
			<p id="login">{!! Html::link('auth/login', 'Log in','') !!}
			{!! Html::link('auth/register', 'Register','') !!}</p>
		</div>
	</div>

@endunless
