<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('tymy', 'Ajax::index');
$routes->get('tymy2', 'Ajax::index2');
$routes->get('tymy3', 'Ajax::index3');
$routes->get('ajax2/(:num)', 'Ajax::ajax2/$1');
$routes->get('ajax3/(:num)', 'Ajax::ajax3/$1');
