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
        '/category' => [[['_route' => 'category', '_controller' => 'App\\Controller\\CategoryController::index'], null, null, null, false, false, null]],
        '/Displaycat' => [[['_route' => 'Displaycat', '_controller' => 'App\\Controller\\CategoryController::displayCat'], null, null, null, false, false, null]],
        '/DisplaycatUser' => [[['_route' => 'DisplaycatUser', '_controller' => 'App\\Controller\\CategoryController::displayCatuser'], null, null, null, false, false, null]],
        '/DisplaycatUserQuiz' => [[['_route' => 'DisplaycatUserQuiz', '_controller' => 'App\\Controller\\CategoryController::displayCatuserQuiz'], null, null, null, false, false, null]],
        '/Addcat' => [[['_route' => 'AddCat', '_controller' => 'App\\Controller\\CategoryController::addCat'], null, null, null, false, false, null]],
        '/quiz' => [[['_route' => 'quiz', '_controller' => 'App\\Controller\\QuizController::index'], null, null, null, false, false, null]],
        '/DisplayQuiz' => [[['_route' => 'DisplayQuiz', '_controller' => 'App\\Controller\\QuizController::DisplayQuiz'], null, null, null, false, false, null]],
        '/Addquiz' => [[['_route' => 'Addquiz', '_controller' => 'App\\Controller\\QuizController::Addquiz'], null, null, null, false, false, null]],
        '/Home' => [[['_route' => 'Home', '_controller' => 'App\\Controller\\TestController::HomeNavigation'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'user', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/connection' => [[['_route' => 'connection', '_controller' => 'App\\Controller\\UserController::connection'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\UserController::logout'], null, null, null, false, false, null]],
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
                .'|/D(?'
                    .'|elete(?'
                        .'|cat/([^/]++)(*:194)'
                        .'|Quiz/([^/]++)(*:215)'
                    .')'
                    .'|isplayQuizCat/([^/]++)(*:246)'
                .')'
                .'|/Update(?'
                    .'|cat/([^/]++)(*:277)'
                    .'|Quiz/([^/]++)(*:298)'
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
        194 => [[['_route' => 'Deletecat', '_controller' => 'App\\Controller\\CategoryController::Deletecat'], ['id'], null, null, false, true, null]],
        215 => [[['_route' => 'DeleteQuiz', '_controller' => 'App\\Controller\\QuizController::DeleteQuiz'], ['id'], null, null, false, true, null]],
        246 => [[['_route' => 'DisplayQuizCat', '_controller' => 'App\\Controller\\QuizController::DisplayQuizCat'], ['id'], null, null, false, true, null]],
        277 => [[['_route' => 'Updatecat', '_controller' => 'App\\Controller\\CategoryController::Updatecat'], ['id'], null, null, false, true, null]],
        298 => [
            [['_route' => 'UpdateQuiz', '_controller' => 'App\\Controller\\QuizController::UpdateQuiz'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
