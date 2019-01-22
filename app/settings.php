<?php
require __DIR__ . '/../config.php';
return [
    'settings' => [
        // Slim Settings
        'displayErrorDetails' => true,
        'db' => [
            'driver' => DB_ADAPTER,
            'host' => DB_HOST,
            'database' => DB_NAME,
            'username' => DB_USER,
            'password' => DB_PASS,
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ]
    ],
];