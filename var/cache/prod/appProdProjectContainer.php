<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerV2pcnrn\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerV2pcnrn/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerV2pcnrn.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerV2pcnrn\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerV2pcnrn\appProdProjectContainer([
    'container.build_hash' => 'V2pcnrn',
    'container.build_id' => 'fe4ca14c',
    'container.build_time' => 1664368152,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerV2pcnrn');
