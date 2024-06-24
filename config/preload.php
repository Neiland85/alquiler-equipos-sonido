<?php

// Define paths for the preload files
$projectDir = dirname(__DIR__);
$prodPreloadPath = $projectDir . '/var/cache/prod/App_KernelProdContainer.preload.php';
$devPreloadPath = $projectDir . '/var/cache/dev/App_KernelDevContainer.preload.php';

try {
    if (is_readable($prodPreloadPath)) {
        require $prodPreloadPath;
    } elseif (is_readable($devPreloadPath)) {
        require $devPreloadPath;
    } else {
        throw new RuntimeException('Preload file not found or unreadable. Ensure the cache is properly generated.');
    }
} catch (RuntimeException $e) {
    error_log('Error: ' . $e->getMessage());
    // Optionally, you can add more actions here like sending an alert to admins
}

/**
 * Validates that the file is both existent and readable.
 *
 * @param string $filePath
 * @return bool
 */
function validateFile(string $filePath): bool
{
    return file_exists($filePath) && is_readable($filePath);
}
