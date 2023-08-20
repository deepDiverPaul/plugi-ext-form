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
        ]
    ],
    'tables' => [
        'entries' => [
            'columns' => [
                'formId' => 'int NOT NULL',
                'data' => 'longtext NOT NULL',
                'created' => 'timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP',
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
