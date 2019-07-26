<?php
// SSL Enforce
URL::forceScheme('https'); // SSL Enforce URLs

Route::get('/', function () { return view('home'); });
Route::post('contact', 'ContactController@store')->name('contactus.store');