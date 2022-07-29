<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/contrat/create' => [[['_route' => 'contrat_create', '_controller' => 'App\\Controller\\ContratController::createContrat'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_index', '_controller' => 'App\\Controller\\IndexController::index'], null, null, null, false, false, null]],
        '/client/create' => [[['_route' => 'client_create', '_controller' => 'App\\Controller\\IndexController::createClient'], null, null, null, false, false, null]],
        '/email' => [[['_route' => 'mail', '_controller' => 'App\\Controller\\IndexController::sendEmail'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/c(?'
                    .'|ontrat/(?'
                        .'|delete/([^/]++)(*:37)'
                        .'|update/([^/]++)(*:59)'
                    .')'
                    .'|lient/(?'
                        .'|delete/([^/]++)(*:91)'
                        .'|update/([^/]++)(*:113)'
                    .')'
                .')'
                .'|/display/(?'
                    .'|contrats/([^/]++)(*:152)'
                    .'|payements/([^/]++)(*:178)'
                .')'
                .'|/payement/create/([^/]++)(*:212)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        37 => [[['_route' => 'contrat_delete', '_controller' => 'App\\Controller\\ContratController::deleteContrat'], ['contratId'], null, null, false, true, null]],
        59 => [[['_route' => 'contrat_update', '_controller' => 'App\\Controller\\ContratController::updateContrat'], ['contratId'], null, null, false, true, null]],
        91 => [[['_route' => 'client_delete', '_controller' => 'App\\Controller\\IndexController::deleteClient'], ['clientId'], null, null, false, true, null]],
        113 => [[['_route' => 'client_update', '_controller' => 'App\\Controller\\IndexController::updateClient'], ['clientId'], null, null, false, true, null]],
        152 => [[['_route' => 'contrat_display', '_controller' => 'App\\Controller\\ContratController::displayContrats'], ['clientId'], null, null, false, true, null]],
        178 => [[['_route' => 'payements_display', '_controller' => 'App\\Controller\\PayementController::displayPayements'], ['contratId'], null, null, false, true, null]],
        212 => [
            [['_route' => 'payement_create', '_controller' => 'App\\Controller\\PayementController::createPayement'], ['contratId'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
