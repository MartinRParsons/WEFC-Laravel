<?php

// Primary Navigation routes...
Route::get('/', 'AboutController@getHome')->name('home');
Route::get('/home', 'AboutController@getHome');
Route::get('/clubs', 'AboutController@getClubs')->name('clubs');
Route::get('/about', 'AboutController@getAbout')->name('about');
Route::get('/meetings', 'AboutController@getMeetings')->name('meetings');
Route::get('/contact', 'AboutController@getContact')->name('contact');
Route::get('/typography', 'AboutController@getTypography')->name('typography');

// Secondary Navigation routes...
Route::get('/SundayServices', 'AboutController@getSundayServices')->name('SundayServices');
Route::get('/LadiesMeeting', 'AboutController@getLadiesMeeting')->name('LadiesMeeting');
Route::get('/BibleStudy', 'AboutController@getBibleStudy')->name('BibleStudy');
Route::get('/CoffeeMorning', 'AboutController@getCoffeeMorning')->name('CoffeeMorning');
Route::get('/WednesdayClub', 'AboutController@getWednesdayClub')->name('WednesdayClub');
Route::get('/CoffeeFridayClub', 'AboutController@getFridayClub')->name('FridayClub');

// Send email routes...
Route::get('/emailtest', 'MailController@sendTest');


// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');


Route::get('/SPARK', 'AboutController@getSPARK')->name('SPARK');
