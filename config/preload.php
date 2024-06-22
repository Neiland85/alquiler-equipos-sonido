<?php

if (file_exists(dirname(__DIR__).'/var/cache/prod/App_KernelProdContainer.preload.php')) {
    require dirname(__DIR__).'/var/cache/prod/App_KernelProdContainer.preload.php';
} elseif (file_exists(dirname(__DIR__).'/var/cache/dev/App_KernelDevContainer.preload.php')) {
    require dirname(__DIR__).'/var/cache/dev/App_KernelDevContainer.preload.php';
} else {
    error_log('Preload file not found. Ensure the cache is properly generated.');
}
