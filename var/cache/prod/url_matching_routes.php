<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/createTask' => [[['_route' => 'create_task', '_controller' => 'App\\Controller\\HomeController::store'], null, ['POST' => 0], null, false, false, null]],
        '/showRegister' => [[['_route' => 'show_register', '_controller' => 'App\\Controller\\RegistrationController::showRegister'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, ['POST' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/showTask/([^/]++)(*:25)'
                .'|/editTask/([^/]++)(*:50)'
                .'|/deleteTask/([^/]++)(*:77)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        25 => [[['_route' => 'show_task', '_controller' => 'App\\Controller\\HomeController::showTask'], ['id'], null, null, false, true, null]],
        50 => [[['_route' => 'edit_task', '_controller' => 'App\\Controller\\HomeController::editTask'], ['id'], ['POST' => 0], null, false, true, null]],
        77 => [
            [['_route' => 'delete_task', '_controller' => 'App\\Controller\\HomeController::deleteTask'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
