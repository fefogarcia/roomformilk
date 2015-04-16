<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


Route::get('logo/{width}/{height}/{type}', function($width, $height, $type) {

	// Create a new empty image resource in the chosen size
	$img = Image::canvas($width, $height);

	// Loads appropriate logo file and resizes it
	$logo = Image::make('images/logo-' . $type . '.png');
	$logo->resize($width, null, function ($constraint) {
    	$constraint->aspectRatio();
	});

	// Pastes logo on canvas
	$img->insert($logo, 'center');

	// Displays image
    return $img->response('png');

});


Route::get('express', function() {

	return 'success';

});