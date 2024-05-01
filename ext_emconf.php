<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'News Form Fill',
    'description' => 'Provide article record to finishers of EXT:form',
    'category' => 'fe',
    'author' => 'Georg Ringer',
    'author_email' => 'mail@ringer.it',
    'state' => 'stable',
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'php' => '8.2.0-8.3.99',
            'form' => '12.4.2-12.4.99',
            'news' => '10.0.0-12.9.99',
        ],
    ],
];
