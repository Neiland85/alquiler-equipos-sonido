<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 * 
 * It contains the mappings for static and dynamic routes,
 * as well as regular expressions used for dynamic route matching.
 */

return [
    // Indicates whether to match the host in route matching.
    false, // $matchHost

    // Static routes configuration
    [ // $staticRoutes
        '/_profiler' => [
            [
                '_route' => '_profiler_home',
                '_controller' => 'web_profiler.controller.profiler::homeAction'
            ],
            null, null, null, true, false, null
        ],
        '/_profiler/search' => [
            [
                '_route' => '_profiler_search',
                '_controller' => 'web_profiler.controller.profiler::searchAction'
            ],
            null, null, null, false, false, null
        ],
        '/_profiler/search_bar' => [
            [
                '_route' => '_profiler_search_bar',
                '_controller' => 'web_profiler.controller.profiler::searchBarAction'
            ],
            null, null, null, false, false, null
        ],
        '/_profiler/phpinfo' => [
            [
                '_route' => '_profiler_phpinfo',
                '_controller' => 'web_profiler.controller.profiler::phpinfoAction'
            ],
            null, null, null, false, false, null
        ],
        '/_profiler/xdebug' => [
            [
                '_route' => '_profiler_xdebug',
                '_controller' => 'web_profiler.controller.profiler::xdebugAction'
            ],
            null, null, null, false, false, null
        ],
        '/_profiler/open' => [
            [
                '_route' => '_profiler_open_file',
                '_controller' => 'web_profiler.controller.profiler::openAction'
            ],
            null, null, null, false, false, null
        ],
    ],

    // Regular expressions used for dynamic route matching
    [ // $regexpList
        0 => '{^(?'
            .'|/_(?'
                .'|error/(\\d+)(?:\\.([^/]++))?(*:38)' // Matches /_error/{code}.{format}
                .'|wdt/([^/]++)(*:57)' // Matches /_wdt/{token}
                .'|profiler/(?'
                    .'|font/([^/\\.]++)\\.woff2(*:98)' // Matches /_profiler/font/{fontName}.woff2
                    .'|([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:134)' // Matches /_profiler/{token}/search/results
                            .'|router(*:148)' // Matches /_profiler/{token}/router
                            .'|exception(?'
                                .'|(*:168)' // Matches /_profiler/{token}/exception
                                .'|\\.css(*:181)' // Matches /_profiler/{token}/exception.css
                            .')'
                        .')'
                        .'|(*:191)' // Matches /_profiler/{token}
                    .')'
                .')'
            .')'
        .')/?$}sDu', // The sDu flags enable specific regex options
    ],

    // Dynamic routes configuration
    [ // $dynamicRoutes
        38 => [
            [
                '_route' => '_preview_error',
                '_controller' => 'error_controller::preview',
                '_format' => 'html'
            ],
            ['code', '_format'], null, null, false, true, null
        ],
        57 => [
            [
                '_route' => '_wdt',
                '_controller' => 'web_profiler.controller.profiler::toolbarAction'
            ],
            ['token'], null, null, false, true, null
        ],
        98 => [
            [
                '_route' => '_profiler_font',
                '_controller' => 'web_profiler.controller.profiler::fontAction'
            ],
            ['fontName'], null, null, false, false, null
        ],
        134 => [
            [
                '_route' => '_profiler_search_results',
                '_controller' => 'web_profiler.controller.profiler::searchResultsAction'
            ],
            ['token'], null, null, false, false, null
        ],
        148 => [
            [
                '_route' => '_profiler_router',
                '_controller' => 'web_profiler.controller.router::panelAction'
            ],
            ['token'], null, null, false, false, null
        ],
        168 => [
            [
                '_route' => '_profiler_exception',
                '_controller' => 'web_profiler.controller.exception_panel::body'
            ],
            ['token'], null, null, false, false, null
        ],
        181 => [
            [
                '_route' => '_profiler_exception_css',
                '_controller' => 'web_profiler.controller.exception_panel::stylesheet'
            ],
            ['token'], null, null, false, false, null
        ],
        191 => [
            [
                '_route' => '_profiler',
                '_controller' => 'web_profiler.controller.profiler::panelAction'
            ],
            ['token'], null, null, false, true, null
        ],
        // Additional dynamic route example
        // Add more routes as needed
    ],

    // Condition to check for additional routing constraints
    null, // $checkCondition
];
