<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about','Page::about');
$routes->get('/contact', 'page;;contact');
$routes->get('/faqs', 'page;;faqs');

$routes->setAutoRoute(true);