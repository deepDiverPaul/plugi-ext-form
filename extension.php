<?php

use Plugi\Extensions;

Extensions::addRoutes([
    '/ext--form/submit' => dirname(__FILE__) . '/routes/submit.php',
    '/ext--form/save-form' => dirname(__FILE__) . '/routes/saveForm.php',
    '/ext--form/delete-form' => dirname(__FILE__) . '/routes/deleteForm.php',
]);

Extensions::addBlocks([
    basename(__DIR__) . '-foo-navbar' => __DIR__ . '/blocks/form-wrapper'
]);

Extensions::registerBackend('form', [
    'title' => 'Form',
    'include' => __DIR__ . '/admin/form.php',
    'icon' => '<i class="ph ph-paper-plane-tilt"></i>',
]);
