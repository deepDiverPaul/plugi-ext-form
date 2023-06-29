<?php

use Plugi\Extensions;

Extensions::addBlocks([
    basename(__DIR__) . '-foo-navbar' => __DIR__ . '/blocks/form-wrapper'
]);

Extensions::registerBackend('form', [
    'title' => 'Form',
    'include' => __DIR__ . '/admin/form.php',
    'icon' => '<i class="ph ph-paper-plane-tilt"></i>',
]);
Extensions::registerAsset('/extensions/demo/dist/admin.css', 'style', 'admin-header');
