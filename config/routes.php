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
$route['default_controller'] = 'welcome';
$route['home/list'] = 'HomeController/list';
$route['home/detail'] = 'HomeController/detail';
$route['home/detail/(:any)'] = 'HomeController/detail/$1';
$route['home/cart'] = 'HomeController/cart';
$route['home/checkout'] = 'HomeController/checkout';
$route['home/vendor'] = 'HomeController/vendor';
$route['home/shop'] = 'HomeController/shop';
$route['home/shop/(:any)'] = 'HomeController/shop/$1';
$route['home/shop/(:any)/(:any)'] = 'HomeController/shop/$1/$2';
$route['login'] = 'HomeController/login';
$route['login/check'] = 'HomeController/login_check';
$route['register'] = 'HomeController/login';
$route['NRegister'] = 'HomeController/NRegister';
$route['ARegister'] = 'HomeController/VendorRegister';
$route['CRegister'] = 'HomeController/CustomerRegister';
$route['home/search'] = 'HomeController/search';
$route['home/aboutus'] = 'HomeController/aboutus';
$route['home/contactus'] = 'HomeController/contactus';
$route['home/faqs'] = 'HomeController/faqs';
$route['customer/signout'] = 'HomeController/signout';
// ===== paypal=====
$route['paypal/buy'] = 'HomeController/buy';
$route['paypal/success'] = 'Paypal/success';
$route['paypal/cancel'] = 'Paypal/cancel';
$route['paypal/ipn'] = 'Paypal/ipn';
// ===========================  ADMIN  =====================================
$route['admin'] = 'AdminController';
$route['admin/check'] = 'AdminController/check';
$route['admin/signout'] = 'AdminController/signout';

$route['admin/user'] = 'AdminController/user';
$route['admin/chat'] = 'Chat';
$route['admin/user/create']= 'AdminController/user_create';
$route['admin/user/do_upload'] = 'AdminController/do_upload';
$route['admin/user/do_upload_update'] = 'AdminController/do_upload_update';
$route['admin/user/edit/(:any)']= 'AdminController/user_edit/$1';
$route['admin/user/del'] = 'AdminController/user_del';

$route['admin/category'] = 'AdminController/categories';
$route['admin/category/create'] = 'AdminController/categories_create';
$route['admin/category/save'] = 'AdminController/categories_save';
$route['admin/category/edit/(:any)'] = 'AdminController/categories_edit/$1';
$route['admin/category/update'] = 'AdminController/categories_update';
$route['admin/category/del'] = 'AdminController/categories_del';

$route['admin/subcategory'] = 'AdminController/subcategories';
$route['admin/subcategory/create'] = 'AdminController/subcategories_create';
$route['admin/subcategory/save'] = 'AdminController/subcategories_save';
$route['admin/subcategory/edit/(:any)'] = 'AdminController/subcategories_edit/$1';
$route['admin/subcategory/update'] = 'AdminController/subcategories_update';
$route['admin/subcategory/del'] = 'AdminController/subcategories_del';

$route['admin/product'] = 'AdminController/product';
$route['admin/product/create'] = 'AdminController/product_create';
$route['admin/product/save']['post'] = "AdminController/product_save";
$route['admin/product/edit/(:any)'] = 'AdminController/product_edit/$1';
$route['admin/product/update'] = 'AdminController/product_update';
$route['admin/product/del'] = 'AdminController/product_del';

$route['admin/register'] = 'AdminController/register';

$route['admin/pending'] = 'AdminController/pending';
$route['admin/pending/status/(:any)/(:any)'] = 'AdminController/pending_status/$1/$2';

$route['admin/pay'] = 'AdminController/payment';
// ===========================  =====  =====================================
// ===========================  Vendor =====================================
// ===========================  =====  =====================================
$route['vendor'] = 'VendorController';
$route['vendor/check'] = 'VendorController/check';
$route['vendor/signout'] = 'VendorController/signout';
$route['vendor/pending'] = 'VendorController/pending';
$route['vendor/pending/create'] = 'VendorController/pending_create';
$route['vendor/pending/save'] = 'VendorController/pending_save';
$route['vendor/pending/update'] = 'VendorController/pending_update';
$route['vendor/pending/del'] = 'VendorController/pending_del';

$route['vendor/register'] = 'VendorController/register';

// ==========================================================
// ======================= Add cart ==========================
//  =========================================================
$route['addcart'] = 'HomeController/addcart';
$route['delcart'] = 'HomeController/delcart';
$route['updatecart'] = 'HomeController/updatecart';

//  ================== Chat  ====================
$route['chat/getChats'] = 'Chat/getChats';
$route['chat/sendMessage'] = 'Chat/sendMessage';
$route['vendor/chat'] = 'Chat/vendor';
// admin
$route['admin/edit'] ='AdminController/edit';
$route['admin/update'] ='AdminController/update';
// vendor
$route['vendor/edit'] = 'VendorController/edit';
$route['vendor/do_upload_update'] = 'VendorController/update';
// customer
$route['login/customer'] = 'HomeController/customer_check';
$route['admin/customer'] = 'AdminController/customer';
$route['admin/customer/create']= 'AdminController/customer_create';
$route['admin/customer/save'] = 'AdminController/customer_save';
$route['admin/customer/update'] = 'AdminController/customer_update';
$route['admin/customer/edit/(:any)']= 'AdminController/customer_edit/$1';
$route['admin/customer/del'] = 'AdminController/customer_del';