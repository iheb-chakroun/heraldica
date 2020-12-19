<?php
defined('BASEPATH') or exit('No direct script access allowed');
$route['default_controller'] = 'welcome';

$route['admin/connect'] = 'connect';
$route['admin/connect/login'] = 'connect/login';
$route['admin/connect/logout'] = 'connect/logout';
$route['admin/dashboard'] = 'dashboard';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
