<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
*/
$router->get('/', function () use ($router) {
  return redirect('https://www.nearpins.com');
});

$router->group(['prefix' => 'api/v1'], function($router)
{
	$router->get('login','ApiLoginController@index');

});
