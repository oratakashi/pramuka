<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/**
 * Action Section
 */
$route['admin/validation.aspx'] = 'User/validation';
$route['admin/login.aspx'] = 'User/login';
$route['admin/logout.aspx'] = 'User/logout';
$route['admin/user/getId.aspx'] = 'User/getID';
$route['admin/user/create.aspx'] = 'User/create';
$route['admin/user/update.aspx'] = 'User/update';
$route['admin/user/delete/(:any).aspx'] = 'User/delete/$1';

$route['admin/song/upload.aspx'] = 'Song/create';
$route['admin/song/(:any)/delete.aspx'] = 'Song/delete/$1';

$route['admin/documents/upload.aspx'] = 'documents/create';

/**
 * UI Section
 */
$route['admin'] = 'Dashboard';
$route['admin/login.html'] = 'Dashboard';
$route['admin/index.html'] = 'Dashboard';

$route['admin/user.html'] = 'User/index';
$route['admin/user/create.html'] = 'User/view_create';
$route['admin/user/(:any).html'] = 'User/read/$1';
$route['admin/user/(:any).aspx'] = 'User/view_update/$1';

$route['admin/song.html'] = 'Song/index';
$route['admin/song/create.html'] = 'Song/view_create';

$route['admin/documents.html'] = 'Documents/index';
$route['admin/documents/create.html'] = 'Documents/view_create';