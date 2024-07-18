<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/video/(:segment)', 'Home::detailVideo/$1');
$routes->setAutoRoute(true);
