<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container7eNiPDN\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container7eNiPDN/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container7eNiPDN.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container7eNiPDN\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container7eNiPDN\App_KernelDevDebugContainer([
    'container.build_hash' => '7eNiPDN',
    'container.build_id' => '444715ea',
    'container.build_time' => 1640707364,
], __DIR__.\DIRECTORY_SEPARATOR.'Container7eNiPDN');