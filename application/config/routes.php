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

$route['admin/article/categories/create.aspx'] = 'article/create_category';
$route['admin/article/categories/(:any)/delete.aspx'] = 'article/delete_category/$1';
$route['admin/article/(:any)/update.aspx'] = 'article/update/$1';
$route['admin/article/(:any)/delete.aspx'] = 'article/delete/$1';
$route['admin/article/(:any)/deactivated.aspx'] = 'article/status/$1/0';
$route['admin/article/(:any)/activated.aspx'] = 'article/status/$1/1';
$route['admin/article/create.aspx'] = 'article/create';

$route['admin/products/create.aspx'] = 'products/create';
$route['admin/products/(:any)/delete.aspx'] = 'products/delete/$1';
$route['admin/products/(:any)/update.aspx'] = 'products/update/$1';

/**
 * UI Section
 */
$route['admin'] = 'Dashboard';
$route['admin/login.html'] = 'Dashboard';
$route['admin/index.html'] = 'Dashboard';

$route['admin/user.html'] = 'User/index';
$route['admin/user/create.html'] = 'User/view_create';
$route['admin/user/(:any).html'] = 'User/read/$1';
$route['admin/user/(:any)/article.html'] = 'User/view_article/$1';
$route['admin/user/(:any).aspx'] = 'User/view_update/$1';

$route['admin/song.html'] = 'Song/index';
$route['admin/song/create.html'] = 'Song/view_create';

$route['admin/documents.html'] = 'Documents/index';
$route['admin/documents/create.html'] = 'Documents/view_create';

$route['admin/products.html'] = 'Products/index';
$route['admin/products/create.html'] = 'Products/view_create';
$route['admin/products/(:any).html'] = 'Products/view_update';

$route['admin/article.html'] = 'Article/index';
$route['admin/article/create.html'] = 'Article/view_create';
$route['admin/article/pending.html'] = 'Article/view_pending';
$route['admin/article/categories.html'] = 'Article/categories';
$route['admin/article/categories/create.html'] = 'Article/view_category_create';
$route['admin/article/(:any)/views.html'] = 'Article/preview/$1';
$route['admin/article/(:any).html'] = 'Article/view_update/$1';
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