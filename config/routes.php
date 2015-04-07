<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['emlak/install'] = 'ofis/install';
$route['emlak/remove']  = 'ofis/remove';

$route['emlak'] = 'ofis/dashboard';
$route['emlak/ofis'] = ($_SERVER['REQUEST_METHOD'] == 'GET') ? 'ofis/index' : 'ofis/store';
$route['emlak/ofis/create'] = 'ofis/create';
$route['emlak/ofis/(:num)'] = ($_SERVER['REQUEST_METHOD'] == 'GET') ? 'ofis/show/$1' : 'ofis/update/$1';
$route['emlak/ofis/(:num)/edit'] = 'ofis/edit/$1';
$route['emlak/ofis/(:num)/confirm_delete'] = 'ofis/confirm/$1';
$route['emlak/ofis/(:num)/delete'] = 'ofis/destroy/$1';

$route['emlak/ofisim'] = 'ofis/myOffices';
$route['emlak/ofisim/(:any)/(:num)'] = 'ofis/myOfficeDashboard/$2';

$route['emlak/ilan'] = ($_SERVER['REQUEST_METHOD'] == 'GET') ? 'ilan/index' : 'ilan/store';
$route['emlak/ilan/create'] = 'ilan/create';
$route['emlak/ilan/(:num)'] = ($_SERVER['REQUEST_METHOD'] == 'GET') ? 'ilan/show/$1' : 'ilan/update/$1';
$route['emlak/ilan/(:num)/edit'] = 'ilan/edit/$1';
$route['emlak/ilan/(:num)/confirm_delete'] = 'ilan/confirm/$1';
$route['emlak/ilan/(:num)/delete'] = 'ilan/destroy/$1';