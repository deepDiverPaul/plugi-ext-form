<?php

phpb_requires_authenticated();
$formsRepository = new \Plugi\Extensions\Form\DefinitionsRepository();
$entriesRepository = new \Plugi\Extensions\Form\EntriesRepository();

if(
    isset($_GET['id'])
) {
    $formsRepository->destroy($_GET['id']);
    $entriesRepository->destroyWhere('formId', $_GET['id']);
}
phpb_redirect(phpb_url('website_manager', ['tab' => 'ext--form', 'action' => 'listForms']));
