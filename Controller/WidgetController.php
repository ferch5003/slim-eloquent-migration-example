<?php
namespace Controllers;

use Models\Widget;
use Illuminate\Database\Query\Builder;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class WidgetController
{
    protected $table;

    public function __construct(
        Builder $table
    ) {
        $this->table = $table;
    }

    public function __invoke(Request $request, Response $response, $args)
    {
        $widget = new Widget();
        $widget->serial_number = 123;
        $widget->name = 'My Test Widget';
        $widget->save();
        echo 'Created!';
    }
}