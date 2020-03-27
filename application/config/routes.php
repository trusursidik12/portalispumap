<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['pages/news']			= 'f_news/index';
$route['pages/news/(:any)']		= 'f_news/readmore/$1';
$route['pages/contact']			= 'f_contact/index';
$route['pages/about-us']		= 'f_about/index';
$route['pages/faq']				= 'f_faq/index';
$route['pages/ranking']			= 'f_ranking/index';
$route['pages/maps']			= 'f_maps/index';

$route['default_controller'] = 'f_home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
