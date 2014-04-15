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


// General
Route::get('/', function()
{
	return View::make('navbar1');
});

Route::get('locations', array('as' => 'locations', function()
{
	return View::make('locations');
}));

Route::get('google-locations', array('as' => 'locations', function()
{
	return View::make('google-locations');
}));

// Theme
Route::get('theme', function()
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

Route::get('theme/stellar', function()
{
	return View::make('theme2-stellar');
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

// Patients
Route::get('navbar/contact', function()
{
	return View::make('navbar3');
});

// Authenticated routes

Route::group(array('before' => 'auth'), function()
{
	Route::get('user/account', function()
	{
		return View::make('testAuth');
	});
	
	// Patients
	Route::resource('patient', 'PatientController');
  // ...
});


Route::get('cover', function()
{
	return View::make('cover');
});

// Database
Route::get('migrate-seed', function()
{
	Artisan::call('migrate');
	Artisan::call('db:seed');
    return "Migrated and seeded!";
});

// Users
Route::get('users', function()
{
	Artisan::call('migrate');
	Artisan::call('db:seed');

    $users = User::all();

    return View::make('users')->with('users', $users);
});

Route::get('logged-in', array('as' => 'logged-in', function()
{
    return "Logged in!";
}));

Route::get('user-created', function()
{
    return "User created!";
});

Route::resource('user', 'UserController');

// Passwords
Route: Route::controller('password', 'RemindersController');


Route::get('password-changed', function()
{
    return "Password changed!";
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
/* 	var_dump($site->save()); */
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
		$site->name = "Name";
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

Route::get('test', function(){
  echo WebsiteModel::greeting();
});

Route::resource('user', 'UserController');

Route::get('env', function(){
  return App::environment();
});

// Splash
// Normal
Route::get('splash', function()
{
	return View::make('splash');
});

// Stellar
Route::get('splash-stellar', function()
{
	return View::make('splash-stellar');
});

Route::get('off-canvas', function()
{
	return View::make('off-canvas');
});

Route::get('register', array(
  'uses' => 'RegisterController@index',
  'as' => 'register.index'
));

Route::post('register', array(
  'uses' => 'RegisterController@store',
  'as' => 'register.store'
));

Route::get('login', array(
  'uses' => 'SessionController@create',
  'as' => 'session.create'
));

Route::post('login', array(
  'uses' => 'SessionController@store',
  'as' => 'session.store'
));

Route::get('logout', array(
  'uses' => 'SessionController@destroy',
  'as' => 'session.destroy'
));