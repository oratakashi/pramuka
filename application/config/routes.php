<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Default CI
 */
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/**
 * Front End
 */
$route['stores/(:any).aspx'] = 'Home/store_search';

$route['index.html'] = 'Home/index';
$route['pengurus.html'] = 'Home/pengurus';
$route['documents.html'] = 'Home/documents';
$route['song.html'] = 'Home/song';
$route['stores.html'] = 'Home/store';
$route['kwaran.html'] = 'Home/kwaran';


$route['stores/(:any)'] = 'Home/store';
$route['stores/(:any)/(:any).html'] = 'Home/store_detail';
$route['stores'] = 'Home/store';

/**
 * Download
 */

$route['documents/(:any)/(:any)'] = 'Home/download_doc';
$route['song/(:any)/(:any)'] = 'Home/download_song';

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

$route['admin/pengurus/create.aspx'] = 'Pengurus/create';
$route['admin/pengurus/(:any)/delete.aspx'] = 'Pengurus/delete';
$route['admin/pengurus/(:any)/update.aspx'] = 'Pengurus/update';

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

$route['admin/slider/create.aspx'] = 'slider/create';
$route['admin/slider/(:any)/delete.aspx'] = 'slider/delete/$1';

$route['admin/password.aspx'] = 'User/password';
$route['admin/settings.aspx'] = 'User/settings';

/**
 * UI Section
 */
$route['admin'] = 'Dashboard';
$route['admin/login.html'] = 'Dashboard';
$route['admin/index.html'] = 'Dashboard';
$route['admin/summary.html'] = 'Dashboard/view_summary';

$route['admin/user.html'] = 'User/index';
$route['admin/user/create.html'] = 'User/view_create';
$route['admin/user/(:any).html'] = 'User/read/$1';
$route['admin/user/(:any)/article.html'] = 'User/view_article/$1';
$route['admin/user/(:any).aspx'] = 'User/view_update/$1';

$route['admin/pengurus.html'] = 'Pengurus/read';
$route['admin/pengurus/create.html'] = 'Pengurus/view_create';
$route['admin/pengurus/(:any)/update.html'] = 'Pengurus/view_update';

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


$route['admin/slider.html'] = 'Slider/index';
$route['admin/slider/create.html'] = 'Slider/view_create';

$route['admin/profile.html'] = 'User/profile';
$route['admin/password.html'] = 'User/view_password';
$route['admin/settings.html'] = 'User/view_settings';

/**
 * Pengurus
 */

/**
 * Action Section
 */
$route['pengurus/validation.aspx'] = 'User/validation';
$route['pengurus/login.aspx'] = 'User/login';
$route['pengurus/logout.aspx'] = 'User/logout';

$route['pengurus/article/(:any)/update.aspx'] = 'article/update/$1';
$route['pengurus/article/(:any)/delete.aspx'] = 'article/delete/$1';
$route['pengurus/article/(:any)/deactivated.aspx'] = 'article/status/$1/0';
$route['pengurus/article/(:any)/activated.aspx'] = 'article/status/$1/1';
$route['pengurus/article/create.aspx'] = 'article/create';

$route['pengurus/password.aspx'] = 'User/password';
$route['pengurus/settings.aspx'] = 'User/settings';

 /**
  * UI Section
  */
$route['pengurus'] = 'Pengurus';
$route['pengurus/login.html'] = 'Pengurus';
$route['pengurus/index.html'] = 'Pengurus';

$route['pengurus/article.html'] = 'Article/index';
$route['pengurus/article/create.html'] = 'Article/view_create';
$route['pengurus/article/(:any).html'] = 'Article/view_update/$1';

$route['pengurus/profile.html'] = 'User/profile';
$route['pengurus/password.html'] = 'User/view_password';
$route['pengurus/settings.html'] = 'User/view_settings';

/**
 * Web Service
 */

$route['api/article/periode/(:any)/(:any)'] = 'Webservice/getArticlePeriodic/$1/$2';
$route['api/article/bulan/(:any)'] = 'Webservice/getArticleMonth/$1';
$route['api/article/tahun/(:any)'] = 'Webservice/getArticleYear/$1';