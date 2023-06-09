<?php

return [
    'title' => 'Form',
    'backend' => true,
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
