<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSWpHpNg\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSWpHpNg/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerSWpHpNg.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerSWpHpNg\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerSWpHpNg\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'SWpHpNg',
    'container.build_id' => '91e172c5',
    'container.build_time' => 1561992889,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSWpHpNg');
