<?php

use App\Kernel;
use Symfony\Component\ErrorHandler\Debug;

// Autoload dependencies
require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

// Enable debug mode for better error handling in non-production environments
if ($_SERVER['APP_DEBUG']) {
    umask(0000);

    Debug::enable();
}

// Ensure the script runs in a secure environment
if ($_SERVER['APP_ENV'] !== 'prod') {
    // Set headers for CORS if necessary
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
    header('Access-Control-Allow-Headers: Content-Type, Authorization');
}

return function (array $context) {
    $kernel = new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);

    return $kernel->handle(Symfony\Component\HttpFoundation\Request::createFromGlobals())->send();
};
