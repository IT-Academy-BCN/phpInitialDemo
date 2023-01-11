<?php 

/**
 * Used to define the routes in the system.
 * 
 * A route should be defined with a key matching the URL and an
 * controller#action-to-call method. E.g.:
 * 
 * '/' => 'index#index',
 * '/calendar' => 'calendar#index'
 */
$routes = array(
	'/test' => 'test#index',
	'/test2' => 'test#checking',
	'/test3' => 'hola#caracola',
	'/index' => 'index#index',
	'/' => 'index#index',
	'/view' => 'view#view',
	'/new' => 'new#new'
);

?>