<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


// Theme
Route::get('theme/', function()
{
	return View::make('theme1');
});

Route::get('theme/home', function()
{
	return View::make('theme1');
});

Route::get('theme/about', function()
{
	return View::make('theme2');
});

Route::get('theme/contact', function()
{
	return View::make('theme3');
});


// Navbar
Route::get('navbar/', function()
{
	return View::make('navbar1');
});

Route::get('navbar/home', function()
{
	return View::make('navbar1');
});

Route::get('navbar/about', function()
{
	return View::make('navbar2');
});

Route::get('navbar/contact', function()
{
	return View::make('navbar3');
});



Route::get('cover', function()
{
	return View::make('cover');
});

Route::get('users', function()
{
    $users = User::all();

    return View::make('users')->with('users', $users);
});

Route::get('hello', array('as' => 'hello', function()
{
    return "Hello";
}));

Route::get('sites', function()
{
    $sites = Site::all();

    return View::make('sites')->with('sites', $sites);
});

Route::get('test-validation', function()
{
	$site = new Site;
	$site->name = 'Albert Park 3';
	$site->addressLine1 = '17 Merton Street';
	$site->addressSuburb = 'Albert Park';
	$site->addressState = 'Vic';
	$site->addressPostcode = '3206';
	$site->phone = '03 9690 2377';
	$site->openingHours = '03 9690 2377';
	var_dump($site->save());
});

Route::get('test-address', function()
{
	// Create a new Address
	$address = new Address(array(
		'addressLine1' => 'Address line 1',
		'addressLine2' => '',
		'addressSuburb' => 'Address suburb',
		'addressState' => 'ABC',
		'addressPostcode' => '1234'
	));
	// Grab Site 1
	$site = Site::find(1);
	// Save the Address
	$site->addresses()->save($address);
});

Route::get('test-site-validation', function()
{
		// Create a new Site
		$site = new Site;
		$site->addressLine1 = "Address line 1";
		$site->addressSuburb = "Address suburb";
		$site->addressState = "ABC";
		$site->addressPostcode = "1234";
		$site->phone = "Phone";
		
		// Site should not save
		$site->save();
		
		// Save the errors
		$errors = $site->errors()->all();
		
		var_dump($errors);
});

Route::get('/test', function(){
  echo WebsiteModel::greeting();
});

Route::resource('site', 'SiteController');

Route::get('env', function(){
  return  App::environment();
});

Route::get('splash', function()
{
	return View::make('splash');
});