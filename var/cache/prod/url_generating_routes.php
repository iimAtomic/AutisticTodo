<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'app_home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'create_task' => [[], ['_controller' => 'App\\Controller\\HomeController::store'], [], [['text', '/createTask']], [], [], []],
    'show_task' => [['id'], ['_controller' => 'App\\Controller\\HomeController::showTask'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/showTask']], [], [], []],
    'edit_task' => [['id'], ['_controller' => 'App\\Controller\\HomeController::editTask'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/editTask']], [], [], []],
    'delete_task' => [['id'], ['_controller' => 'App\\Controller\\HomeController::deleteTask'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/deleteTask']], [], [], []],
    'show_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::showRegister'], [], [['text', '/showRegister']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
];
