<?php

use Plugi\Extensions\Form\DefinitionsRepository;

$formsRepository = new DefinitionsRepository();

$form = [
    'name' => "Neues Formular",
    'fields' => "[]",
    'finishers' => "[]",
];

if(isset($_GET['id']))
    $form = $formsRepository->findWithId($_GET['id'])
?>
<script>
    const fields = <?= $form["fields"] ?>;
    const finishers = <?= $form["finishers"] ?>;
    const defaultField = {
      name: 'formularfeld',
      label: 'Formularfeld',
      type: 'text',
      required: false,
    }
    const defaultFinisher = {
      type: 'save'
    }
</script>

<form action="/ext--form/save-form" method="post" x-data="{fields: fields, finishers: finishers}">
    <?php
        if(isset($form['id'])) echo '<input type="hidden" name="id" value="'.$form['id'].'">';
    ?>

    <div class="form-control">
        <label class="label">
            <span class="label-text">Name</span>
        </label>
        <input type="text" name="name" value="<?= $form['name'] ?>" class="input input-bordered w-full" />
    </div>

    <div class="">
        <input type="hidden" name="fields" :value="JSON.stringify(fields)">
        <div class="">Formularfelder <a href="javascript:void(0)" @click="fields.push({...defaultField})">neu</a></div>
        <div class="">
            <template x-for="field in fields">
                <div>
                    <input type="text" x-model="field.name" class="input input-bordered w-full max-w-xs" >
                    <input type="text" x-model="field.label" class="input input-bordered w-full max-w-xs" >
                    <input type="text" x-model="field.type" class="input input-bordered w-full max-w-xs" >
                </div>
            </template>
        </div>
    </div>

    <div class="">
        <input type="hidden" name="finishers" :value="JSON.stringify(finishers)">
        <div class="">Aktionen <a href="javascript:void(0)" @click="finishers.push({...defaultFinisher})">neu</a></div>
        <div class="">
            <template x-for="finisher in finishers">
                <div>
                    <input type="text" x-model="finisher.type" class="input input-bordered w-full max-w-xs" >
                </div>
            </template>
        </div>
    </div>

    <div class="text-center mt-8">
        <a href="?tab=ext--form" class="btn btn-light btn-sm mr-1">
            <?= phpb_trans('website-manager.back') ?>
        </a>
        <button class="btn btn-primary btn-sm">
            Speichern
        </button>
    </div>
</form>
