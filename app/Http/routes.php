<?php

Route::get('/', 'AboutController@getHome');
Route::get('/friday', 'AboutController@getFridayClub');
Route::get('/about', 'AboutController@getAbout');
Route::get('/meetings', 'AboutController@getMeetings');
Route::get('/contact', 'AboutController@getContact');
Route::get('/typography', 'AboutController@getTypography');
