<?php

/**
 * Returns the importmap for this application.
 *
 * - "path" is a path inside the asset mapper system. Use the
 *   "debug:asset-map" command to see the full list of paths.
 *
 * - "entrypoint" (JavaScript only) set to true for any module that will
 *   be used as an "entrypoint" (and passed to the importmap() Twig function).
 *
 * The "importmap:require" command can be used to add new entries to this file.
 *
 * Usage:
 * To add a new entry, run `bin/console importmap:require <package-name>`.
 */

// Define the base path for assets.
$baseAssetPath = './assets/';
$vendorPath = './vendor/symfony/';

// Define default importmap entries.
$importmap = [
    'app' => [
        'path' => $baseAssetPath . 'app.js',
        'entrypoint' => true,
    ],
    '@hotwired/stimulus' => [
        'version' => getenv('STIMULUS_VERSION') ?: '3.2.2',
    ],
    '@symfony/stimulus-bundle' => [
        'path' => $vendorPath . 'stimulus-bundle/assets/dist/loader.js',
    ],
    '@hotwired/turbo' => [
        'version' => getenv('TURBO_VERSION') ?: '7.3.0',
    ],
];

/**
 * Validate the importmap paths and versions.
 */
foreach ($importmap as $key => $value) {
    if (isset($value['path']) && !file_exists($value['path'])) {
        fwrite(STDERR, "Warning: Path '{$value['path']}' for '$key' does not exist.\n");
    }

    if (isset($value['version']) && !preg_match('/^\d+\.\d+\.\d+$/', $value['version'])) {
        fwrite(STDERR, "Warning: Version '{$value['version']}' for '$key' is not a valid version format.\n");
    }
}

return $importmap;
