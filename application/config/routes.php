<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// frontend
$route['pages/news']					= 'f_news/index';
$route['pages/news/(:any)']				= 'f_news/readmore/$1';
$route['pages/contact']					= 'f_contact/index';
$route['pages/about-us']				= 'f_about/index';
$route['pages/faq']						= 'f_faq/index';
$route['pages/ranking']					= 'f_ranking/index';
$route['pages/maps']					= 'f_maps/index';


// backend
$route['dashboard']						= 'b_dashboard/index';

$route['login']							= 'b_acc_login/login';
$route['process']						= 'b_acc_login/process';
$route['logout']						= 'b_acc_login/logout';

$route['about/list']					= 'b_about/index';
$route['about/add']						= 'b_about/add';
$route['about/edit/(:any)']				= 'b_about/edit/$1';
$route['about/delete/(:any)']			= 'b_about/delete/$1';

$route['faq/list']						= 'b_faq/index';
$route['faq/add']						= 'b_faq/add';
$route['faq/edit/(:any)']				= 'b_faq/edit/$1';
$route['faq/delete/(:any)']				= 'b_faq/delete/$1';

$route['news/list']						= 'b_news/index';
$route['news/add']						= 'b_news/add';
$route['news/edit/(:any)']				= 'b_news/edit/$1';
$route['news/delete/(:any)']			= 'b_news/delete/$1';

$route['accounts/users/list']			= 'b_acc_users/index';
$route['accounts/users/add']			= 'b_acc_users/add';
$route['accounts/users/edit/(:any)']	= 'b_acc_users/edit/$1';
$route['accounts/users/delete/(:any)']	= 'b_acc_users/delete/$1';

$route['accounts/levels/list']			= 'b_acc_levels/index';
$route['accounts/levels/add']			= 'b_acc_levels/add';
$route['accounts/levels/edit/(:any)']	= 'b_acc_levels/edit/$1';
$route['accounts/levels/delete/(:any)']	= 'b_acc_levels/delete/$1';

$route['default_controller'] 			= 'f_home';
$route['404_override'] 					= '';
$route['translate_uri_dashes'] 			= FALSE;
