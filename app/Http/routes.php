<?php

Route::get('/', 'AboutController@getHome');
Route::get('/Friday', 'AboutController@getFridayClub');
Route::get('/About', 'AboutController@getAbout');
Route::get('/Meetings', 'AboutController@getMeetings');
