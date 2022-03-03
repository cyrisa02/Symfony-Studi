<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\DefaultController::contact'], null, null, null, false, false, null]],
        '/liste-des-articles' => [[['_route' => 'post_list', '_controller' => 'App\\Controller\\PostController::list'], null, null, null, false, false, null]],
        '/article/fonctionnement-des-applications-symfony' => [[['_route' => 'post_item', '_controller' => 'App\\Controller\\DefaultController::item'], null, null, null, false, false, null]],
        '/article/fonctionnement-des-applications-symfony2' => [[['_route' => 'post_item2', '_controller' => 'App\\Controller\\PostController::item2'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
