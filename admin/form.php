<?php
$modules = [
    'listForms' => [
        'include' => __DIR__ . '/Views/ListForms.php',
        'label' => 'Formulare',
        'showTabs' => true,
        'inMenu' => true,
    ],
    'settings' => [
        'include' => __DIR__ . '/Views/ExtSettings.php',
        'label' => 'Einstellungen',
        'showTabs' => true,
        'inMenu' => true,
    ],
    'editForm' => [
        'include' => __DIR__ . '/Views/EditForm.php',
        'showTabs' => false,
        'inMenu' => false,
    ],
    'listEntries' => [
        'include' => __DIR__ . '/Views/ListEntries.php',
        'showTabs' => false,
        'inMenu' => false,
    ],
];

$activeModule = array_keys($modules)[0];
if (isset($_GET['action']) && array_key_exists($_GET['action'], $modules)) $activeModule = $_GET['action'];

?>
<?php
if ($modules[$activeModule]['showTabs'] === true):
?>
<div class="tabs mb-6">
    <div class="border-b border-base-300 grow"></div>
    <?php
    foreach ($modules as $name => $module):
        if ($module['inMenu'] === false) continue;
    ?>
        <a class="tab tab-lifted <?= $name === $activeModule ? 'tab-active' : '' ?>" href="<?= phpb_url('website_manager', ['tab' => 'ext--form', 'action' => $name]) ?>"><?= $module['label'] ?></a>
    <?php
    endforeach;
    ?>
    <div class="border-b border-base-300 grow"></div>
</div>
<?php
endif;
?>
<div class="w-full">
    <?php
    include $modules[$activeModule]['include'];
    ?>
</div>

