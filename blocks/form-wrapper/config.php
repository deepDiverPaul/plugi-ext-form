<?php

$formRepository = new \Plugi\Extensions\Form\DefinitionsRepository();
$forms = $formRepository->getAll(['id', 'name']);

$formOptions = [];
foreach ($forms as $form) {
    $formOptions[] = [
        "id" => $form['id'],
        "name" => $form['name']
    ];
}

return [
    'title' => 'Form Wrapper',
    'category' => 'Form',
    'icon' => 'fa fa-hand-peace-o',
    'settings' => [
        "formId" => [
            "type" => "select",
            "label" => "Formular",
            "value" => 0,
            "options" => $formOptions
        ],
    ]
];
