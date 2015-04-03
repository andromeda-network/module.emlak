<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['emlak/install'] = 'ofis/install';
$route['emlak/remove']  = 'ofis/remove';
 

$route['emlak'] = ($_SERVER['REQUEST_METHOD'] == 'GET') ? 'ofis/index' : 'ofis/store';
$route['emlak/ofis'] = ($_SERVER['REQUEST_METHOD'] == 'GET') ? 'ofis/index' : 'ofis/store';
$route['emlak/ofis/create'] = 'ofis/create';
$route['emlak/ofis/(:num)'] = ($_SERVER['REQUEST_METHOD'] == 'GET') ? 'ofis/show/$1' : 'ofis/update/$1';
$route['emlak/ofis/(:num)/edit'] = 'ofis/edit/$1';
$route['emlak/ofis/(:num)/confirm_delete'] = 'ofis/confirm/$1';
$route['emlak/ofis/(:num)/delete'] = 'ofis/destroy/$1';


