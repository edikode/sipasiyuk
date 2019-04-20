<?php
defined('BASEPATH') OR exit('No direct script access allowed');



// $route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['default_controller'] = 'Auth';
$route['translate_uri_dashes'] = FALSE;


/*********** USER DEFINED ROUTES *******************/
$route['loginMe']       = 'C_Login/loginMe';
$route['dashboard']     = 'C_Dashboard';