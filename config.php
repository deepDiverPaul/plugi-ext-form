<?php

return [
    'title' => 'Form',
    'author' => 'Paul Spenke',
    'identifier' => 'form',
    'licence' => 'MIT',
    'version' => '1.0.0',
    'settings' => [
         [
            'name' => 'email',
            'label' => 'Email',
            'default' =>  'admin@example.com',
            'type' => 'text',
        ],
        [
            'name' => 'emailEnabled',
            'label' => 'Email is Enabled',
            'default' =>  'true',
            'type' => 'toggle',
        ]
    ]
];
