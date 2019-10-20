<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Default CI
 */
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/**
 * Administrator
 */

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
$route['admin/documents/(:any)/delete.aspx'] = 'documents/delete/$1';

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

$route['admin/products.html'] = 'Products/index';

/**
 * Pengurus
 */

/**
 * Action Section
 */
$route['pengurus/validation.aspx'] = 'User/validation';
$route['pengurus/login.aspx'] = 'User/login';
$route['pengurus/logout.aspx'] = 'User/logout';
 /**
  * UI Section
  */
$route['pengurus'] = 'Pengurus';
$route['pengurus/login.html'] = 'Pengurus';
$route['pengurus/index.html'] = 'Pengurus';