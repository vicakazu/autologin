<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Token length
	|--------------------------------------------------------------------------
	|
	| Here you may specify the length of the token that is generated. Shorter
	| tokens are great for keeping links friendlier, but allow for more chance
	| of brute-forcing an existing token.
	|
	*/
	
	'length' => 20,

	/*
	|--------------------------------------------------------------------------
	| Token lifetime
	|--------------------------------------------------------------------------
	|
	| Here you may specifiy the number of minutes you wish the autologin token
	| to remain active.
	|
	*/

	'lifetime' => 1440,

	/*
	|--------------------------------------------------------------------------
	| Destroy expired/used tokens.
	|--------------------------------------------------------------------------
	|
	| If this value is set to true, when a token is validated and used, it
	| and all other tokens that have expired will be removed from storage.
	|
	*/

	'remove_expired' => false,

	/*
	|--------------------------------------------------------------------------
	| Autologin path
	|--------------------------------------------------------------------------
	|
	| Here you may specify the route with which a autologin link will be 
	| generated, with {token} being replaced by the autologin token, as well
	| as the name for that route.
	|
	*/

	'route_path' => 'autologin/{token}',

	'route_name' => 'autologin',

	'route_controller' => 'Studious\Autologin\AutologinController@autologin'

);
