<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVEDHlA1\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVEDHlA1/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerVEDHlA1.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerVEDHlA1\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerVEDHlA1\App_KernelDevDebugContainer([
    'container.build_hash' => 'VEDHlA1',
    'container.build_id' => 'd508475f',
    'container.build_time' => 1691109413,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVEDHlA1');
