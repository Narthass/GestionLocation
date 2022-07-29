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
                        .'|create/([^/]++)(*:37)'
                        .'|delete/([^/]++)(*:59)'
                        .'|update/([^/]++)(*:81)'
                        .'|archiver/([^/]++)(*:105)'
                    .')'
                    .'|lient/(?'
                        .'|delete/([^/]++)(*:138)'
                        .'|update/([^/]++)(*:161)'
                    .')'
                .')'
                .'|/display/(?'
                    .'|contrats/([^/]++)(*:200)'
                    .'|payements/([^/]++)(*:226)'
                .')'
                .'|/payement/create/([^/]++)(*:260)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        37 => [[['_route' => 'contrat_create_for_client', '_controller' => 'App\\Controller\\ContratController::createContratForAClient'], ['clientId'], null, null, false, true, null]],
        59 => [[['_route' => 'contrat_delete', '_controller' => 'App\\Controller\\ContratController::deleteContrat'], ['contratId'], null, null, false, true, null]],
        81 => [[['_route' => 'contrat_update', '_controller' => 'App\\Controller\\ContratController::updateContrat'], ['contratId'], null, null, false, true, null]],
        105 => [[['_route' => 'contrat_archiver', '_controller' => 'App\\Controller\\ContratController::archiverContrat'], ['contratId'], null, null, false, true, null]],
        138 => [[['_route' => 'client_delete', '_controller' => 'App\\Controller\\IndexController::deleteClient'], ['clientId'], null, null, false, true, null]],
        161 => [[['_route' => 'client_update', '_controller' => 'App\\Controller\\IndexController::updateClient'], ['clientId'], null, null, false, true, null]],
        200 => [[['_route' => 'contrat_display', '_controller' => 'App\\Controller\\ContratController::displayContrats'], ['clientId'], null, null, false, true, null]],
        226 => [[['_route' => 'payements_display', '_controller' => 'App\\Controller\\PayementController::displayPayements'], ['contratId'], null, null, false, true, null]],
        260 => [
            [['_route' => 'payement_create', '_controller' => 'App\\Controller\\PayementController::createPayement'], ['contratId'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
