<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZzKxEJx\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZzKxEJx/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerZzKxEJx.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerZzKxEJx\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerZzKxEJx\App_KernelDevDebugContainer([
    'container.build_hash' => 'ZzKxEJx',
    'container.build_id' => 'ae5c97b8',
    'container.build_time' => 1719084270,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZzKxEJx');
