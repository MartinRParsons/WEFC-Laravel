@extends('layouts.master')

@section('title', 'Meetings')
@section('description',"WEFC hosts a variety of meetings throughout the week, find out more about them.")
@section('TwitterImage', "images/WEFC_Church.jpg")
@section('FbImage',"images/WEFC_Church.jpg")

@section('sidebar')

@endsection

@section('content')

<h2>Sunday</h2>
  <div class = "Meeting">
    <h3>Morning service - 11:00</h3>
    <p>We meet every Sunday morning to share in a time of worship, prayer and studying God's word. Open to all.
    {!! Html::linkRoute('SundayServices', 'Read more') !!}</p>
  </div>
  <div class = "Meeting">
    <h3>Evening service - 18:30</h3>
    <p>Our evening services are more informal, with time to discuss the message that has been given over tea and coffee. Open to all.
    {!! Html::linkRoute('SundayServices', 'Read more') !!}</p>
  </div>
  <div class = "Meeting">
    <h3>Communion</h3>
    <p>We come together twice a month to celebate communion. This takes place on the first Sunday evening and third Sunday morning of each month.
    {!! Html::linkRoute('SundayServices', 'Read more') !!}</p>
  </div>
<!-- <h2>Monday</h2> -->
<h2>Tuesday</h2>
  <h3>Bible study and prayer meeting - 20:00</h3>
  <p>We meet every Tuesday to pray together, study the Bible, and have fellowship. Open to anyone who wishes to join us.
  {!! Html::linkRoute('BibleStudy', 'Read more') !!}</p>
<h2>Wednesday</h2>
  <h3>Wednesday club - 18:00</h3>
  <p>If you're aged 6-11 then Wednesday club is the place for you. With games, crafts, stories and quizzes there is something for everyone.
  {!! Html::linkRoute('WednesdayClub', 'Read more') !!}</p>
<h2>Thursday</h2>
  <h3>Coffee morning - 10:30</h3>
    <p>Pop in for coffee any Thursday morning. Whether you want to chat, play games or have questions about the Christian faith this is place to come.
    {!! Html::linkRoute('CoffeeMorning', 'Read more') !!}</p>
  <h3>Ladies meeting - 14:00</h3>
    <p>Open to women of all ages. This is a time for support, encouragement and fellowship. With a range of activities and outings this is a great opportunity to spend time with other ladies.
    {!! Html::linkRoute('LadiesMeeting', 'Read more') !!}</p>
<h2>Friday</h2>
  <h3>Friday club - 19:30</h3>
  <p>For those of you at secondary school Friday club is a great place to socialise and have fun outside of school. Activities include games, challenges and discussions in addition to outings to places such as Jump Giants.
  {!! Html::linkRoute('FridayClub', 'Read more') !!}</p>
<!-- <h2>Saturday</h2> -->
@endsection
