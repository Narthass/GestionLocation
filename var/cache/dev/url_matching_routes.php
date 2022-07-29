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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin_backoffice', '_controller' => 'App\\Controller\\Admin\\AdminController::index'], null, null, null, true, false, null]],
        '/admin/client/create' => [[['_route' => 'client_create_admin', '_controller' => 'App\\Controller\\Admin\\AdminController::createClient'], null, null, null, false, false, null]],
        '/client/display' => [[['_route' => 'display_client', '_controller' => 'App\\Controller\\ClientController::index'], null, null, null, false, false, null]],
        '/client/create' => [[['_route' => 'client_create', '_controller' => 'App\\Controller\\ClientController::createClient'], null, null, null, false, false, null]],
        '/email' => [[['_route' => 'mail', '_controller' => 'App\\Controller\\ClientController::sendEmail'], null, null, null, false, false, null]],
        '/contrat/create' => [[['_route' => 'contrat_create', '_controller' => 'App\\Controller\\ContratController::createContrat'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_index', '_controller' => 'App\\Controller\\IndexController::index'], null, null, null, false, false, null]],
        '/mentionslegales' => [[['_route' => 'mentions_legales', '_controller' => 'App\\Controller\\IndexController::mentionslegales'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\SecurityController::registerUser'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
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
                .'|/adminclient/(?'
                    .'|delete/([^/]++)(*:200)'
                    .'|update/([^/]++)(*:223)'
                .')'
                .'|/c(?'
                    .'|lient/(?'
                        .'|delete/([^/]++)(*:261)'
                        .'|update/([^/]++)(*:284)'
                    .')'
                    .'|ontrat/(?'
                        .'|create/([^/]++)(*:318)'
                        .'|delete/([^/]++)(*:341)'
                        .'|update/([^/]++)(*:364)'
                        .'|archiver/([^/]++)(*:389)'
                    .')'
                .')'
                .'|/display/(?'
                    .'|contrats/([^/]++)(*:428)'
                    .'|payements/([^/]++)(*:454)'
                .')'
                .'|/payement/create/([^/]++)(*:488)'
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
        200 => [[['_route' => 'client_delete_admin', '_controller' => 'App\\Controller\\Admin\\AdminController::deleteClient'], ['clientId'], null, null, false, true, null]],
        223 => [[['_route' => 'client_update_admin', '_controller' => 'App\\Controller\\Admin\\AdminController::updateClient'], ['clientId'], null, null, false, true, null]],
        261 => [[['_route' => 'client_delete', '_controller' => 'App\\Controller\\ClientController::deleteClient'], ['clientId'], null, null, false, true, null]],
        284 => [[['_route' => 'client_update', '_controller' => 'App\\Controller\\ClientController::updateClient'], ['clientId'], null, null, false, true, null]],
        318 => [[['_route' => 'contrat_create_for_client', '_controller' => 'App\\Controller\\ContratController::createContratForAClient'], ['clientId'], null, null, false, true, null]],
        341 => [[['_route' => 'contrat_delete', '_controller' => 'App\\Controller\\ContratController::deleteContrat'], ['contratId'], null, null, false, true, null]],
        364 => [[['_route' => 'contrat_update', '_controller' => 'App\\Controller\\ContratController::updateContrat'], ['contratId'], null, null, false, true, null]],
        389 => [[['_route' => 'contrat_archiver', '_controller' => 'App\\Controller\\ContratController::archiverContrat'], ['contratId'], null, null, false, true, null]],
        428 => [[['_route' => 'contrat_display', '_controller' => 'App\\Controller\\ContratController::displayContrats'], ['clientId'], null, null, false, true, null]],
        454 => [[['_route' => 'payements_display', '_controller' => 'App\\Controller\\PayementController::displayPayements'], ['contratId'], null, null, false, true, null]],
        488 => [
            [['_route' => 'payement_create', '_controller' => 'App\\Controller\\PayementController::createPayement'], ['contratId'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
