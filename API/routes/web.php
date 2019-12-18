<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
   return $router->app->version();
});

$router->group(['prefix' => 'api'], function($router){

	// Routes for Authentication
	$router->post('login', 'AuthenticationController@authenticate');	// Login

	$router->post('signup', 'AuthenticationController@signup');				// SignUp new user

	// Routes for Users
	$router->get('users', 'UserController@getUserAll'); 	// Get all users

	$router->get('users/{id}', 'UserController@getUser'); // Get spesific user by id_user

	// Routes for Committee
	$router->post('committee/new', 'CommitteeController@createNew');	// New committee
});