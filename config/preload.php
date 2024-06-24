<?php

// Define paths for the preload files
$projectDir = dirname(__DIR__);
$prodPreloadPath = $projectDir . '/var/cache/prod/App_KernelProdContainer.preload.php';
$devPreloadPath = $projectDir . '/var/cache/dev/App_KernelDevContainer.preload.php';

try {
    // Attempt to require the preload file from the production cache
    requirePreloadFile($prodPreloadPath);
} catch (RuntimeException $e) {
    try {
        // If production file is not available, attempt the development cache
        requirePreloadFile($devPreloadPath);
    } catch (RuntimeException $e) {
        // Log the error and optionally handle further actions like notifications
        error_log('Error: ' . $e->getMessage());
        // Example: sendAlertToAdmins($e->getMessage());
    }
}

/**
 * Attempts to require the preload file if it exists and is readable.
 *
 * @param string $filePath
 * @throws RuntimeException if the file is not found or unreadable
 */
function requirePreloadFile(string $filePath): void
{
    if (validateFile($filePath)) {
        require $filePath;
    } else {
        throw new RuntimeException("Preload file at '$filePath' not found or unreadable. Ensure the cache is properly generated.");
    }
}

/**
 * Validates that the file exists and is readable.
 *
 * @param string $filePath
 * @return bool
 */
function validateFile(string $filePath): bool
{
    return file_exists($filePath) && is_readable($filePath);
}
