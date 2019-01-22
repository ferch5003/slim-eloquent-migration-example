<?php
$container = $app->getContainer();
$container['db'] = function ($container) {
    $capsule = new \Illuminate\Database\Capsule\Manager;
    $capsule->addConnection($container['settings']['db']);

    $capsule->setAsGlobal();
    $capsule->bootEloquent();

    return $capsule;
};
$container[\Controllers\WidgetController::class] = function ($c) {
    $table = $c->get('db')->table('widgets');
    return new \Controllers\WidgetController($table);
};