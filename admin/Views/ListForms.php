<?php
use Plugi\Extensions\Form\DefinitionsRepository;

$formsRepository = new DefinitionsRepository();
$forms = $formsRepository->getAll();

?>
<table class="table table-zebra w-full">
    <thead>
    <tr>
        <th class="w-5">ID</th>
        <th><?= phpb_trans('website-manager.name') ?></th>
        <th class="w-36"><?= phpb_trans('website-manager.actions') ?></th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($forms as $form):
        ?>
        <tr>
            <td>
                <?= phpb_e($form['id']) ?>
            </td>
            <td>
                <?= phpb_e($form['name']) ?>
            </td>
            <td class="actions">
                <a href="<?= phpb_url('website_manager', ['tab' => 'ext--form', 'action' => 'listEntries', 'id' => $form['id']]) ?>" class="btn btn-light btn-outline btn-sm btn-circle">
                    <i class="text-xl ph-duotone ph-eye"></i>
                </a>
                <a href="<?= phpb_url('website_manager', ['tab' => 'ext--form', 'action' => 'editForm', 'id' => $form['id']]) ?>" class="btn btn-primary hidden md:inline-flex btn-sm btn-circle" title="<?= phpb_trans('website-manager.edit') ?>">
                    <i class="text-xl ph-duotone ph-pencil-line"></i>
                </a>
                <a href="/ext--form/delete-form?id=<?= $form['id'] ?>" title="<?= phpb_trans('website-manager.remove') ?>" class="btn btn-error btn-sm btn-circle">
                    <i class="text-xl ph-duotone ph-trash"></i>
                </a>
            </td>
        </tr>
    <?php
    endforeach;
    ?>
    </tbody>
</table>


<div class="text-center mt-8">
    <a href="<?= phpb_url('website_manager', ['tab' => 'ext--form', 'action' => 'editForm']) ?>" class="btn btn-primary">
        Neues Formular
    </a>
</div>

