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
    ],
    'tables' => [
        'entries' => [
            'columns' => [
                'name' => 'varchar(255) NOT NULL',
                'email' => 'varchar(255) NOT NULL',
                'meta' => 'mediumtext NOT NULL',
                'message' => 'longtext NOT NULL',
            ],
            'uniqueKeys' => [],
        ],
        'definitions' => [
            'columns' => [
                'name' => 'varchar(255) NOT NULL',
                'fields' => 'longtext NOT NULL',
                'finishers' => 'longtext NOT NULL',
            ],
            'uniqueKeys' => [
                'name' => ['name']
            ],
        ],
    ]
];
