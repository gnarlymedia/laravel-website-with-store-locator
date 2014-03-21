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

Route::get('/', function()
{
	return View::make('theme');
});

Route::get('home', function()
{
	return View::make('theme');
});

Route::get('about', function()
{
	return View::make('theme2');
});

Route::get('contact', function()
{
	return View::make('theme3');
});

Route::get('cover', function()
{
	return View::make('cover');
});