<?php

namespace Drupal\routing_demo\Routing;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;


/**
 * Defines dynamic routes.
 */
class TestRoutes {
 /**
 * {@inheritdoc}
 */
public function routes() {
 $routes = new RouteCollection();

 $route = new Route(
 // Path to attach this route to:
 '/routing_demo_con/testdynamic',
 // Route defaults:
 array(
 '_controller' =>
'\Drupal\routing_demo\Controller\TestPageController::testDynamic',
 ),
 // Route requirements:
 array(
 '_access' => 'TRUE',
 )
 );
 $routes->add('routing_demo_con.test_page', $route);
 return $routes;
 }
} 
