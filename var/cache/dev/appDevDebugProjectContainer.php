<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container8ims1xv\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container8ims1xv/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/Container8ims1xv.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\Container8ims1xv\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \Container8ims1xv\appDevDebugProjectContainer([
    'container.build_hash' => '8ims1xv',
    'container.build_id' => 'ec4b742a',
    'container.build_time' => 1553861562,
], __DIR__.\DIRECTORY_SEPARATOR.'Container8ims1xv');