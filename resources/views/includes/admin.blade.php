@if (Auth::check())
		<div>you are logged in</div>
@endif

@unless (Auth::check())
		
@endunless