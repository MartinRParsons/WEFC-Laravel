@if (Auth::check())
		<div>you are logged in</div>
@endif

@unless (Auth::check())
		<div class="adminbar">you are not logged in</div>
@endunless