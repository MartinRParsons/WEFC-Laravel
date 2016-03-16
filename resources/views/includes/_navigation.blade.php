<div class="header-banner">
	<div class="header-logo">
		<a href = "/"><img src="/images/WEFClogo144x180.png"></a>
	</div>
	<div class="banner-text">
			Welling Evangelical </br> Free Church
	</div>
	<div class="FIEC-logo">
		<a href = "https://fiec.org.uk/"><img src="/images/FIEClogo.png"></a>
	</div>
</div>
<div class="navbar">
	<!-- <a href = "/" class="nav-link">Home</a> -->
	{!! Html::link('/', 'Home',['class'=>'nav-link']) !!}</p>
	<!-- <a href="/about" class="nav-link">About</a> -->
	{!! Html::link('/about', 'About',['class'=>'nav-link']) !!}</p>
	<!-- <a href="meetings" class="nav-link">Meetings</a> -->
	{!! Html::link('/meetings', 'Meetings',['class'=>'nav-link']) !!}</p>
	<!-- <a href="/friday" class="nav-link">Clubs</a> -->
	<!-- {!! Html::link('/clubs', 'Clubs',['class'=>'nav-link']) !!}</p> -->
	<!-- <a href="/contact" class="nav-link">Contact Us</a> -->
	{!! Html::link('/contact', 'Contact Us',['class'=>'nav-link']) !!}</p>
</div>
