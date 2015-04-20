<?php namespace App;

class Logo {

	// $width = 0;
	// $height = 0;
	// $type = '';

	static function render($width, $height, $type) {

		// Create a new empty image resource in the chosen size
		$img = \Image::canvas($width, $height);

		// Loads appropriate logo file and resizes it
		$logo = \Image::make('images/logo-' . $type . '.png');
		$logo->resize($width, null, function ($constraint) {
	    	$constraint->aspectRatio();
		});

		// Pastes logo on canvas
		$img->insert($logo, 'center');

		// Displays image
	    return $img->response('png');

	}

}
