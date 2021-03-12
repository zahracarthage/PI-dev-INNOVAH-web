<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/reclamation' => [[['_route' => 'reclamation_index', '_controller' => 'App\\Controller\\ReclamationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reclamation/newreclamation' => [[['_route' => 'reclamation_new', '_controller' => 'App\\Controller\\ReclamationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/repas/affichagesolo' => [[['_route' => 'repas_index3', '_controller' => 'App\\Controller\\RepasController::index3'], null, ['GET' => 0], null, false, false, null]],
        '/repas' => [[['_route' => 'repas_index', '_controller' => 'App\\Controller\\RepasController::index'], null, ['GET' => 0], null, true, false, null]],
        '/repas/repas_back' => [[['_route' => 'repas_index2', '_controller' => 'App\\Controller\\RepasController::index2'], null, ['GET' => 0], null, false, false, null]],
        '/repas/new' => [[['_route' => 'repas_new', '_controller' => 'App\\Controller\\RepasController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/repas/trinom' => [[['_route' => 'trinom', '_controller' => 'App\\Controller\\RepasController::Trinom'], null, null, null, false, false, null]],
        '/repas/triid' => [[['_route' => 'triid', '_controller' => 'App\\Controller\\RepasController::Triid'], null, null, null, false, false, null]],
        '/reservationrepas' => [[['_route' => 'reservationrepas_index', '_controller' => 'App\\Controller\\ReservationrepasController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reservationrepas/new' => [[['_route' => 'reservationrepas_new', '_controller' => 'App\\Controller\\ReservationrepasController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/re(?'
                    .'|clamation/([^/]++)(?'
                        .'|/edit(*:201)'
                        .'|(*:209)'
                    .')'
                    .'|pas/([^/]++)(?'
                        .'|/edit(*:238)'
                        .'|(*:246)'
                    .')'
                    .'|servationrepas/([^/]++)(?'
                        .'|(*:281)'
                        .'|/edit(*:294)'
                        .'|(*:302)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        201 => [[['_route' => 'reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        209 => [[['_route' => 'reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['id'], ['GET' => 0, 'DELETE' => 1], null, false, true, null]],
        238 => [[['_route' => 'repas_edit', '_controller' => 'App\\Controller\\RepasController::update'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        246 => [[['_route' => 'repas_delete', '_controller' => 'App\\Controller\\RepasController::delete'], ['id'], ['GET' => 0, 'DELETE' => 1], null, false, true, null]],
        281 => [[['_route' => 'reservationrepas_show', '_controller' => 'App\\Controller\\ReservationrepasController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        294 => [[['_route' => 'reservationrepas_edit', '_controller' => 'App\\Controller\\ReservationrepasController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        302 => [
            [['_route' => 'reservationrepas_delete', '_controller' => 'App\\Controller\\ReservationrepasController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
