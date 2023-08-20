<?php

phpb_requires_authenticated();
$formsRepository = new \Plugi\Extensions\Form\DefinitionsRepository();

if(
    isset($_POST['name'])
) {
    if(isset($_POST['id'])){
        $form = [
            'id' => $_POST['id'],
            'name' => $_POST['name'],
            'fields' => $_POST['fields'],
            'finishers' => $_POST['finishers'],
        ];
        $formsRepository->update($form, $form);
    } else {
        $formsRepository->create([
            'name' => $_POST['name'],
            'fields' => $_POST['fields'],
            'finishers' => $_POST['finishers'],
        ]);
    }

}
phpb_redirect(phpb_url('website_manager', ['tab' => 'ext--form', 'action' => 'listForms']));
