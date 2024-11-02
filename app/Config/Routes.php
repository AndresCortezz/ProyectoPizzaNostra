<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('shopcar', 'Shopcar::index');
$routes->get('searchproducts', 'SearchProducts::index');
