<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container3YtBmlx\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container3YtBmlx/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container3YtBmlx.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container3YtBmlx\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container3YtBmlx\srcApp_KernelDevDebugContainer([
    'container.build_hash' => '3YtBmlx',
    'container.build_id' => '4a67d9f3',
    'container.build_time' => 1650761066,
], __DIR__.\DIRECTORY_SEPARATOR.'Container3YtBmlx');
