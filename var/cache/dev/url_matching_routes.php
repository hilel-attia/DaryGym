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
                .'|/qr\\-code/([^/]++)/([\\w\\W]+)(*:197)'
                .'|/(en|fr)(?'
                    .'|/(?'
                        .'|a(?'
                            .'|d(?'
                                .'|min(?'
                                    .'|(*:234)'
                                    .'|/(?'
                                        .'|login(*:251)'
                                        .'|user(?'
                                            .'|(*:266)'
                                            .'|/(?'
                                                .'|new(*:281)'
                                                .'|edit/([^/]++)(*:302)'
                                                .'|change(?'
                                                    .'|validite/([^/]++)(*:336)'
                                                    .'|Password(*:352)'
                                                .')'
                                                .'|delete/([^/]++)(*:376)'
                                                .'|groupaction(*:395)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                                .'|dacceuille(*:417)'
                            .')'
                            .'|cceuille(*:434)'
                        .')'
                        .'|evenement(*:452)'
                        .'|Ajoute(*:466)'
                        .'|update/([^/]++)(*:489)'
                        .'|s(?'
                            .'|upp(?'
                                .'|/([^/]++)(*:516)'
                                .'|rimer/([^/]++)(*:538)'
                            .')'
                            .'|earchEventajax(*:561)'
                        .')'
                        .'|home(*:574)'
                        .'|l(?'
                            .'|ist(*:589)'
                            .'|ogout(*:602)'
                        .')'
                        .'|reserv(?'
                            .'|e(?'
                                .'|(*:624)'
                                .'|r(*:633)'
                            .')'
                            .'|ation/(?'
                                .'|create\\-checkout\\-session(*:676)'
                                .'|success(*:691)'
                                .'|echec(*:704)'
                            .')'
                        .')'
                        .'|qrcode/([^/]++)(*:729)'
                    .')'
                    .'|(*:738)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        197 => [[['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null]],
        234 => [[['_route' => 'app_admin_index', '_controller' => 'App\\Controller\\AdminController::index', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        251 => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        266 => [[['_route' => 'app_admin_users', '_controller' => 'App\\Controller\\UserController::users', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        281 => [[['_route' => 'app_admin_new_user', '_controller' => 'App\\Controller\\UserController::newUser', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        302 => [[['_route' => 'app_admin_edit_user', '_controller' => 'App\\Controller\\UserController::editUser', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        336 => [[['_route' => 'app_admin_changevalidite_user', '_controller' => 'App\\Controller\\UserController::activate', '_locale' => 'en'], ['_locale', 'id'], ['POST' => 0], null, false, true, null]],
        352 => [[['_route' => 'app_admin_changepswd', '_controller' => 'App\\Controller\\UserController::changePswd', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        376 => [[['_route' => 'app_admin_delete_user', '_controller' => 'App\\Controller\\UserController::delete', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        395 => [[['_route' => 'app_admin_groupaction_user', '_controller' => 'App\\Controller\\UserController::groupAction', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        417 => [[['_route' => 'acceuille', '_controller' => 'App\\Controller\\HistoryController::Acceuille', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        434 => [[['_route' => 'acceuille-list', '_controller' => 'App\\Controller\\HistoryController::home', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        452 => [[['_route' => 'evenement', '_controller' => 'App\\Controller\\EvenementController::Contact', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        466 => [[['_route' => 'Ajoute-event', '_controller' => 'App\\Controller\\EvenementController::Ajoute', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        489 => [[['_route' => 'updateEvenement', '_controller' => 'App\\Controller\\EvenementController::update', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        516 => [[['_route' => 'deleteEvenement', '_controller' => 'App\\Controller\\EvenementController::suppc', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        538 => [[['_route' => 'deleteParticipants', '_controller' => 'App\\Controller\\ParticipationController::supppart', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        561 => [[['_route' => 'ajaxevent', '_controller' => 'App\\Controller\\ReservationController::searchEventeajax', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        574 => [[['_route' => 'front', '_controller' => 'App\\Controller\\HomeController::home', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        589 => [[['_route' => 'part-list', '_controller' => 'App\\Controller\\ParticipationController::participant', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        602 => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        624 => [[['_route' => 'reservation-list', '_controller' => 'App\\Controller\\ReservationController::home', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        633 => [[['_route' => 'Ajoute-reserve', '_controller' => 'App\\Controller\\ReservationController::Reserver', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        676 => [[['_route' => 'checkout', '_controller' => 'App\\Controller\\ReservationController::checkout', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        691 => [[['_route' => 'success', '_controller' => 'App\\Controller\\ReservationController::success', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        704 => [[['_route' => 'echec', '_controller' => 'App\\Controller\\ReservationController::echec', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        729 => [[['_route' => 'qrcode', '_controller' => 'App\\Controller\\ReservationController::qrcode', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        738 => [
            [['_route' => 'event-list', '_controller' => 'App\\Controller\\EvenementController::home', '_locale' => 'en'], ['_locale'], null, null, true, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
