<?php

return [
    'saveToDatabase' => [
        'class' => \Plugi\Extensions\Form\Finishers\SaveEntryToDatabase::class,
        'label' => 'In Datenbank speichern',
    ],
    'sendMailToAdmin' => [
        'class' => \Plugi\Extensions\Form\Finishers\SendEmailToAdmin::class,
        'label' => 'Email an Admin senden',
    ]
];
