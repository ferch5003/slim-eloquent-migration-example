<?php
namespace Controllers;

use Models\User;
use Illuminate\Database\Query\Builder;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class UserController
{
    protected $table;

    public function __construct(
        Builder $table
    ) {
        $this->table = $table;
    }

    public function __invoke(Request $request, Response $response, $args)
    {
        User::create($request->getParsedBody());
        echo 'Created!';
    }
}