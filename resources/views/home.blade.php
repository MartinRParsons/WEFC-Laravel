@extends('layouts.master')

@section('title', 'Home')
@section('description',"WEFC is a small, friendly community church with a heart to serve the people of Welling, and to share the Gospel.")
@section('TwitterImage', "images/WEFC_Church.jpg")
@section('FbImage',"images/WEFC_Church.jpg")

@section('sidebar')

@endsection

@section('content')

	<div class="spacer">
		<h1>Welcome to WEFC</h1>
		<img src="images/WEFC_Church.jpg" alt="Picture of the church building" />
		<p>Welling Evangelical Free Church is a small, friendly community with a heart to serve the people of Welling, and to share the Gospel.</p>
		<p>If you're looking for a church in Welling, or want to know more about Christianity come and join us at one of our {!! Html::linkRoute('meetings', 'regular services, coffee morning or other meetings') !!}. There is something for everyone and they are a great place to meet us, find out who we are and what we believe.</p>
		<p>As a church family we enjoy spending time together, holding regular social events including film nights, meals and other fun activities. In addition to these we hold events for the community including Quiz nights and dinners. We are also involved in events such as {!! Html::linkRoute('SPARK', 'SPARK in the Park') !!} which we run with other churches in Welling and Bexleyheath.</p>
	</div>
@endsection
