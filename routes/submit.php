<?php

$formsRepository = new \Plugi\Extensions\Form\DefinitionsRepository();

$form = $formsRepository->findWithId($_GET['id']);
$formFinishers = json_decode($form['finishers'], true);

$finishers = include __DIR__ . '/../admin/Finishers/config.php';



foreach ($formFinishers as $finisher) {
    if (array_key_exists($finisher['type'], $finishers)) {
        $instance = new $finishers[$finisher['type']]['class'];
        $instance->execute();
    }
}

phpb_redirect('/', [], 201);


