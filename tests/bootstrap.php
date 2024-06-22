<?php

use Symfony\Component\Dotenv\Dotenv;

require dirname(__DIR__).'/vendor/autoload.php';

$bootstrapFile = dirname(__DIR__).'/config/bootstrap.php';
$envFile = dirname(__DIR__).'/.env';

// Load the bootstrap file if it exists
if (file_exists($bootstrapFile)) {
    require $bootstrapFile;
} elseif (method_exists(Dotenv::class, 'bootEnv')) {
    // Fallback to loading environment variables if no bootstrap file
    (new Dotenv())->bootEnv($envFile);
}

// Ensure the test environment is set up properly
if (!isset($_SERVER['APP_ENV'])) {
    $_SERVER['APP_ENV'] = 'test';
}

// Check if the .env.test file exists and load it
$testEnvFile = dirname(__DIR__).'/.env.test';
if (file_exists($testEnvFile)) {
    (new Dotenv())->load($testEnvFile);
}

// Optional: Set up error reporting for tests
ini_set('display_errors', '1');
error_reporting(E_ALL);
