<?php

namespace Config;

use CodeIgniter\Router\RouteCollection;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true); // Enables automatic routing for controllers

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// Base route for the Home controller
$routes->get('/', 'Home::index'); // Homepage (you can change to another page)
$routes->get('/student/form', 'Home::add_student_form'); // Add student form
$routes->get('/student/view/(:num)', 'Home::view_student/$1');


$routes->get('/student', 'Home::student_view'); // View all students
$routes->post('/student/add', 'Home::add_student'); // Handle form submission for adding a student
$routes->get('/student/edit/(:num)', 'Home::edit_student/$1'); // Edit student by ID
$routes->post('/student/update/(:num)', 'Home::update_student_post/$1'); // Update student
$routes->get('/student/delete/(:num)', 'Home::delete_student/$1'); // Delete student by ID







// // Routes for the Student controller
// $routes->get('/student', 'Home::student'); // View all students
// $routes->get('/student/add', 'Student::add'); // Add new student form
// $routes->post('/student/save', 'Student::save'); // Save new student
// $routes->get('/student/edit/(:num)', 'Student::edit/$1'); // Edit student form
// $routes->post('/student/update/(:num)', 'Student::update/$1'); // Update student details
// $routes->get('/student/delete/(:num)', 'Student::delete/$1'); // Delete student

// Custom 404 route if needed
// $routes->set404Override(function () {
//     echo view('errors/custom_404');
// });

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * Environment-based routes can be required here.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

