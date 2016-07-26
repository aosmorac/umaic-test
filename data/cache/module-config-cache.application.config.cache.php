<?php
return array (
  'service_manager' => 
  array (
    'aliases' => 
    array (
      'HttpRouter' => 'Zend\\Router\\Http\\TreeRouteStack',
      'router' => 'Zend\\Router\\RouteStackInterface',
      'Router' => 'Zend\\Router\\RouteStackInterface',
      'RoutePluginManager' => 'Zend\\Router\\RoutePluginManager',
    ),
    'factories' => 
    array (
      'Zend\\Router\\Http\\TreeRouteStack' => 'Zend\\Router\\Http\\HttpRouterFactory',
      'Zend\\Router\\RoutePluginManager' => 'Zend\\Router\\RoutePluginManagerFactory',
      'Zend\\Router\\RouteStackInterface' => 'Zend\\Router\\RouterFactory',
      'ValidatorManager' => 'Zend\\Validator\\ValidatorPluginManagerFactory',
    ),
  ),
  'route_manager' => 
  array (
  ),
  'router' => 
  array (
    'routes' => 
    array (
      'home' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/',
          'defaults' => 
          array (
            'controller' => 'Application\\Controller\\PruebaController',
            'action' => 'dashboard',
          ),
        ),
      ),
      'application' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/application[/:action]',
          'defaults' => 
          array (
            'controller' => 'Application\\Controller\\PruebaController',
            'action' => 'dashboard',
          ),
        ),
      ),
    ),
  ),
  'controllers' => 
  array (
    'invokables' => 
    array (
      'Application\\Controller\\Prueba' => 'Application\\Controller\\PruebaController',
    ),
  ),
  'view_manager' => 
  array (
    'display_not_found_reason' => true,
    'display_exceptions' => true,
    'doctype' => 'HTML5',
    'not_found_template' => 'error/404',
    'exception_template' => 'error/index',
    'template_map' => 
    array (
      'layout/layout' => 'C:\\Drive\\841210lab\\up\\umaic\\module\\Application\\config/../view/layout/layout.phtml',
      'application/index/index' => 'C:\\Drive\\841210lab\\up\\umaic\\module\\Application\\config/../view/application/index/index.phtml',
      'error/404' => 'C:\\Drive\\841210lab\\up\\umaic\\module\\Application\\config/../view/error/404.phtml',
      'error/index' => 'C:\\Drive\\841210lab\\up\\umaic\\module\\Application\\config/../view/error/index.phtml',
    ),
    'template_path_stack' => 
    array (
      0 => 'C:\\Drive\\841210lab\\up\\umaic\\module\\Application\\config/../view',
    ),
  ),
);