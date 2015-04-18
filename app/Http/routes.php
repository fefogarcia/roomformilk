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

// Route::get('/', 'WelcomeController@index');

Route::get('/', function() {

	return redirect('/express/');

});

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


Route::get('express/', function() {

	$products = App\Product::all();

	return View::make('express/products', ['products' => $products, 'count' => 0]);

});

Route::get('express/{productId}/', function($productId) {

	$products = App\Product::all();

	$product = App\Product::find($productId);

	return View::make('express/product', ['product' => $product, 'products' => $products]);

});

Route::get('contact/', function() {

	$success = '';

	if (Input::get('sent') == 1) {
		$success = '<h5 style="text-align: center">Your message has been sent successfully.</h5>';
	}

	return View::make('contact', ['success' => $success]);

});

Route::get('about/', function() {

	return View::make('about');

});

Route::get('articles/', function() {

	$articles = App\Article::all();

	return View::make('articles.articles', ['articles' => $articles]);

});

Route::get('articles/id/{articleId}', function($articleId) {

	$articles = App\Article::all();

	$article = App\Article::find($articleId);

	return View::make('articles.article', ['article' => $article, 'articles' => $articles]);

});

Route::get('get/{landingPageId}/', function($landingPageId) {

	$landingPage = App\LandingPage::find($landingPageId);

	$product = App\Product::find($landingPage->product_id);

	return View::make('landing', ['landingPage' => $landingPage, 'product' => $product]);

});
