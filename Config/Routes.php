<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');

// Dashboard & Stock Summary
$routes->get('/','Dashboard::index');
$routes->get('/summary','Dashboard::summary');
$routes->get('/reportinw','Dashboard::reportin');
$routes->get('/reportout','Dashboard::reportout');
$routes->get('/test','Dashboard::convert');

// Product Routes
$routes->get('/add_product', 'Products::index');
$routes->post('/add','Products::add');
$routes->get('/view_product', 'Products::view');
$routes->get('/edit_product/(:num)','Products::edit/$1');
$routes->post('/update_product','Products::update');
$routes->get('/delete_product/(:num)','Products::delete/$1');

// Vendor Routes
$routes->get('/add_vendor', 'Vendor::index');
$routes->post('/add_ven','Vendor::add');
$routes->get('/view_vendor','Vendor::view');
$routes->get('/edit_vendor/(:num)','Vendor::edit/$1');
$routes->post('/update_vendor','Vendor::update');
$routes->get('/delete_vendor/(:num)','Vendor::delete/$1');

// Inward Routes
$routes->get('/add_inward','Inward::index');
$routes->get('/product/(:num)','Inward::product/$1');
$routes->post('/add_in','Inward::add');
$routes->get('/view_inward','Inward::view');
$routes->get('/view_inward_products/(:num)','Inward::view_products/$1');
$routes->get('/delete_inward/(:num)','Inward::delete/$1');
$routes->get('/edit_inward/(:num)','Inward::edit/$1');
$routes->post('/update_inward','Inward::update');
$routes->get('/edit_inward_product/(:num)','Inward::edit_product/$1');
$routes->post('/update_inward_product','Inward::update_product');
$routes->get('/delete_inward_product/(:num)','Inward::delete_product/$1');
$routes->get('/inward_invoice/(:num)','Inward::invoice/$1');

// Customer Routes
$routes->get('add_customer','Customers::index');
$routes->post('add_cust','Customers::add');
$routes->get('view_customer','Customers::view');
$routes->get('edit_customer/(:num)','Customers::edit/$1');
$routes->post('/update_customer','Customers::update');
$routes->get('delete_customer/(:num)','Customers::delete/$1');

// Outward Routes
$routes->get('/add_outward','Outward::index');
$routes->get('/oproduct/(:num)','Outward::product/$1');
$routes->post('/add_out','Outward::add');
$routes->get('/view_outward','Outward::view');
$routes->get('/delete_outward/(:num)','Outward::delete/$1');
$routes->get('/edit_outward/(:num)','Outward::edit/$1');
$routes->post('/update_outward','Outward::update');
$routes->get('/view_outward_products/(:num)','Outward::view_products/$1');
$routes->get('/edit_outward_product/(:num)','Outward::edit_product/$1');
$routes->post('/update_outward_product','Outward::update_product');
$routes->get('/delete_outward_product/(:num)','Outward::delete_product/$1');
$routes->get('/outward_invoice/(:num)','Outward::invoice/$1');

// Performa Rules
$routes->get('/add_performa','Performa::index');
$routes->post('/add_perf','Performa::add');
$routes->get('/view_performa','Performa::view');
$routes->get('/delete_performa/(:num)','Performa::delete/$1');
$routes->get('/edit_performa/(:num)','Performa::edit/$1');
$routes->post('/update_performa','Performa::update');
$routes->get('/view_performa_products/(:num)','Performa::view_products/$1');
$routes->get('/edit_performa_product/(:num)','Performa::edit_product/$1');
$routes->post('/update_performa_product','Performa::update_product');
$routes->get('/delete_performa_product/(:num)','Performa::delete_product/$1');
$routes->get('/performa_invoice/(:num)','Performa::invoice/$1');






/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
