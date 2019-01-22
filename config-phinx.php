<?php
require __DIR__ . '/config.php';
return [
    'paths' => [
      'migrations' => 'database/migrations'
    ],
    'migration_base_class' => '\Migrations\Migration',
    'environments' => [
      'default_database' => 'dev',
      'dev' => [
        'adapter' => DB_ADAPTER,
        'host' => DB_HOST,
        'name' => DB_NAME,
        'user' => DB_USER,
        'pass' => DB_PASS,
        'port' => DB_PORT
      ]
    ]
  ];