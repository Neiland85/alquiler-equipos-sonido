<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 * 
 * It contains the mappings for static and dynamic routes,
 * as well as any regular expressions used for dynamic route matching.
 */

return [
    // Indicates whether to match the host.
    false, // $matchHost

    // Static routes configuration
    [ // $staticRoutes
        // Route to the profiler home page
        '/_profiler' => [
            [
                '_route' => '_profiler_home',
                '_controller' => 'web_profiler.controller.profiler::homeAction'
            ],
            null, null, null, true, false, null
        ],
        // Route to the profiler search
        '/_profiler/search' => [
            [
                '_route' => '_profiler_search',
                '_controller' => 'web_profiler.controller.profiler::searchAction'
            ],
            null, null, null, false, false, null
        ],
        // Route to the profiler search bar
        '/_profiler/search_bar' => [
            [
                '_route' => '_profiler_search_bar',
                '_controller' => 'web_profiler.controller.profiler::searchBarAction'
            ],
            null, null, null, false, false, null
        ],
        // Route to the PHP info page
        '/_profiler/phpinfo' => [
            [
                '_route' => '_profiler_phpinfo',
                '_controller' => 'web_profiler.controller.profiler::phpinfoAction'
            ],
            null, null, null, false, false, null
        ],
        // Route to the Xdebug page
        '/_profiler/xdebug' => [
            [
                '_route' => '_profiler_xdebug',
                '_controller' => 'web_profiler.controller.profiler::xdebugAction'
            ],
            null, null, null, false, false, null
        ],
        // Route to open profiler files
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
        // Regular expression to match dynamic routes
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
        // Route to preview error pages
        38 => [
            [
                '_route' => '_preview_error',
                '_controller' => 'error_controller::preview',
                '_format' => 'html'
            ],
            ['code', '_format'], null, null, false, true, null
        ],
        // Route to the web debug toolbar
        57 => [
            [
                '_route' => '_wdt',
                '_controller' => 'web_profiler.controller.profiler::toolbarAction'
            ],
            ['token'], null, null, false, true, null
        ],
        // Route to profiler fonts
        98 => [
            [
                '_route' => '_profiler_font',
                '_controller' => 'web_profiler.controller.profiler::fontAction'
            ],
            ['fontName'], null, null, false, false,Vamos a mejorar el script auto-generado por
