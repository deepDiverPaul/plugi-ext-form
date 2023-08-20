<?php
use Plugi\Extensions\Form\DefinitionsRepository;
use Plugi\Extensions\Form\EntriesRepository;

$id = $_GET['id'];

$formsRepository = new DefinitionsRepository();
$form = $formsRepository->findWithId($id);
$fields = json_decode($form['fields'], true);



$entriesRepository = new EntriesRepository();
$entries = $entriesRepository->findWhere('formId', $id)

?>
<table class="table table-zebra w-full">
    <thead>
    <tr>
        <th class="w-5">ID</th>
        <th>Erstellt</th>
        <?php
        foreach ($fields as $field):
        ?>
            <th><?= $field['label'] ?></th>
        <?php
        endforeach;
        ?>
        <th class="w-12"><?= phpb_trans('website-manager.actions') ?></th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($entries as $entry):
        $entryData = json_decode($entry['data'], true)
        ?>
        <tr x-data>
            <td>
                <?= phpb_e($entry['id']) ?>
            </td>
            <td x-text="(new Date('<?= phpb_e($entry['created']) ?> UTC')).toLocaleString('de')">

            </td>
            <?php
            foreach ($fields as $field):
                ?>
                <td><?= $entryData['fields'][$field['name']] ?></td>
            <?php
            endforeach;
            ?>
            <td class="actions">
                <a href="/ext--form/delete-entry?id=<?= $entry['id'] ?>" title="<?= phpb_trans('website-manager.remove') ?>" class="btn btn-error btn-sm btn-circle">
                    <i class="text-xl ph-duotone ph-trash"></i>
                </a>
            </td>
        </tr>
    <?php
    endforeach;
    ?>
    </tbody>
</table>

