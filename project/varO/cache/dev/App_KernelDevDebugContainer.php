<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMHEh0ok\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMHEh0ok/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerMHEh0ok.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerMHEh0ok\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerMHEh0ok\App_KernelDevDebugContainer([
    'container.build_hash' => 'MHEh0ok',
    'container.build_id' => '21b311a6',
    'container.build_time' => 1607359000,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerMHEh0ok');
