<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/blog/blog' => [[['_route' => 'blog_index', '_controller' => 'App\\Controller\\BlogController::blog'], null, null, null, false, false, null]],
        '/blog/posts' => [[['_route' => 'blog_post', '_controller' => 'App\\Controller\\BlogController::posts'], null, null, null, false, false, null]],
        '/exemple' => [[['_route' => 'app_basic_home', '_controller' => 'App\\Controller\\CreeAvecMakeController::index'], null, null, null, false, false, null]],
        '/another-page' => [[['_route' => 'app_creeavecmake_anotherpage', '_controller' => 'App\\Controller\\CreeAvecMakeController::anotherPage'], null, null, null, false, false, null]],
        '/json' => [[['_route' => 'app_creeavecmake_jsonexemple', '_controller' => 'App\\Controller\\CreeAvecMakeController::jsonexemple'], null, null, null, false, false, null]],
        '/annotation' => [[['_route' => 'annotation', '_controller' => 'App\\Controller\\NoRoutyamlController::annotation'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\DefaultController::contact'], null, null, null, false, false, null]],
        '/liste-des-articles' => [[['_route' => 'post_list', '_controller' => 'App\\Controller\\PostController::list'], null, null, null, false, false, null]],
        '/article/fonctionnement-des-applications-symfony' => [[['_route' => 'post_item', '_controller' => 'App\\Controller\\DefaultController::item'], null, null, null, false, false, null]],
        '/article/fonctionnement-des-applications-symfony2' => [[['_route' => 'post_item2', '_controller' => 'App\\Controller\\PostController::item2'], null, null, null, false, false, null]],
        '/utilisateurs' => [[['_route' => 'user_list', '_controller' => 'App\\Controller\\UserController::list'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/deactivate/([^/]++)(*:27)'
                .'|/blog(?'
                    .'|/(?'
                        .'|posts(?'
                            .'|/([^/]++)(?'
                                .'|(*:66)'
                                .'|/([^/]++)(*:82)'
                            .')'
                            .'|(?:/(\\d+))?(*:101)'
                        .')'
                        .'|bonjour/([^/]++)(*:126)'
                    .')'
                    .'|(fr|en)/posts/(\\d+)\\.([^/]++)(*:164)'
                    .'|/posts2/([^/]++)(?:/(\\d{4}))?(*:201)'
                .')'
                .'|/message/([^/]++)(*:227)'
                .'|/challenge/(?'
                    .'|send\\-result/(\\d+)(*:267)'
                    .'|user\\-answers/([^/]++)(?'
                        .'|/(html|json)(*:312)'
                        .'|(?:/([^/]++))?(*:334)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:375)'
                    .'|wdt/([^/]++)(*:395)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:441)'
                            .'|router(*:455)'
                            .'|exception(?'
                                .'|(*:475)'
                                .'|\\.css(*:488)'
                            .')'
                        .')'
                        .'|(*:498)'
                    .')'
                .')'
                .'|/utilisateurs\\-([^/]++)(*:531)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        27 => [[['_route' => 'app_avecservice_deactivateuser', '_controller' => 'App\\Controller\\AvecServiceController::deactivateUser'], ['id'], null, null, false, true, null]],
        66 => [[['_route' => 'app_blog_post', '_controller' => 'App\\Controller\\BlogController::post'], ['id'], null, null, false, true, null]],
        82 => [[['_route' => 'app_blog_postsfromuserandyear', '_controller' => 'App\\Controller\\BlogController::postsFromUserAndYear'], ['user', 'year'], null, null, false, true, null]],
        101 => [[['_route' => 'app_blog_savepost', 'id' => 1, '_controller' => 'App\\Controller\\BlogController::savePost'], ['id'], ['POST' => 0, 'PATCH' => 1], null, false, true, null]],
        126 => [[['_route' => 'hello', '_controller' => 'App\\Controller\\BlogController::hello'], ['name'], null, null, false, true, null]],
        164 => [[['_route' => 'app_blog_post1', 'id' => '1', '_controller' => 'App\\Controller\\BlogController::post1'], ['_locale', 'id', '_format'], ['GET' => 0], null, false, true, null]],
        201 => [[['_route' => 'app_blog_postsfromuserandyear1', 'year' => 2020, '_controller' => 'App\\Controller\\BlogController::postsFromUserAndYear1'], ['user', 'year'], ['GET' => 0], null, false, true, null]],
        227 => [[['_route' => 'app_creeavecmake_message', '_controller' => 'App\\Controller\\CreeAvecMakeController::message'], ['id'], null, null, false, true, null]],
        267 => [[['_route' => 'app_routingchallenge_sendresult', '_controller' => 'App\\Controller\\RoutingChallengeController::sendResult'], ['id'], ['POST' => 0], null, false, true, null]],
        312 => [[['_route' => 'app_routingchallenge_getuseranswers', '_controller' => 'App\\Controller\\RoutingChallengeController::getUserAnswers'], ['username', '_format'], ['GET' => 0], null, false, true, null]],
        334 => [[['_route' => 'app_routingchallenge_getuseranswer', 'id' => 1, '_controller' => 'App\\Controller\\RoutingChallengeController::getUserAnswer'], ['username', 'id'], null, null, false, true, null]],
        375 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        395 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        441 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        455 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        475 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        488 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        498 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        531 => [
            [['_route' => 'user_item', '_controller' => 'App\\Controller\\UserController::item'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
