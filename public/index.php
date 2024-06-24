<?php

use App\Kernel;
use Symfony\Component\ErrorHandler\Debug;
use Symfony\Component\HttpFoundation\Request;

// Autoload dependencies
require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

// Enable debug mode for better error handling in non-production environments
if ($_SERVER['APP_DEBUG']) {
    umask(0000);
    Debug::enable();
}

// Set secure headers and CORS policies for non-production environments
if ($_SERVER['APP_ENV'] !== 'prod') {
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
    header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');

    // Optionally, you can log or monitor requests in development
    // file_put_contents('request_log.txt', print_r($_REQUEST, true), FILE_APPEND);
}

return function (array $context) {
    // Ensure the script runs in a secure environment
    if (php_sapi_name() !== 'cli-server' && $_SERVER['APP_ENV'] === 'prod') {
        // In production, make sure to set proper security headers
        header('Strict-Transport-Security: max-age=31536000; includeSubDomains; preload');
        header('X-Content-Type-Options: nosniff');
        header('X-Frame-Options: DENY');
        header('X-XSS-Protection: 1; mode=block');
        header('Referrer-Policy: no-referrer-when-downgrade');
        header('Content-Security-Policy: default-src \'self\'; script-src \'self\'; object-src \'none\'');
    }

    $kernel = new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
    $request = Request::createFromGlobals();

    // Optionally, handle trusted proxies or headers if needed
    // Request::setTrustedProxies(['127.0.0.1'], Request::HEADER_X_FORWARDED_ALL);
    // Request::setTrustedHosts(['^localhost$', '^example\.com$']);

    return $kernel->handle($request)->send();
};
