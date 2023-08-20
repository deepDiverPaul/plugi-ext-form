<?php
$formRepository = new \Plugi\Extensions\Form\DefinitionsRepository();
$id = $block->setting('formId');
if ($id > 0):
    $form = $formRepository->findWithId($id);
    $fields = json_decode($form['fields'], true);
?>

<div class="form" x-data="{data: {fields : {}}, status: 'idle'}">
    <form action="/ext--form/submit?id=<?= $id ?>" method="post" x-on:submit.prevent="submitForm(data, status)">
        <?php
            foreach ($fields as $field):
        ?>
                <label for=""><?= $field['label'] ?><input x-model="data.fields.<?= $field['name'] ?>" type="<?= $field['type'] ?>"></label>
        <?php
            endforeach;
        ?>
        <button :disabled="status === 'busy'">Absenden</button>
    </form>
    <script>
        const submitForm = (data, status) => {
          status = 'busy'
          fetch('/ext--form/submit?id=<?= $id ?>', {
            method: 'POST',
            body: JSON.stringify(data)
          }).finally(() => {status = 'idle'})
        }
    </script>
</div>
<?php
endif;
?>
