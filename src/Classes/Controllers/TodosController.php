<?php
namespace Todos\Controllers;

use Slim\Http\Request;
use Slim\Http\Response;
use Todos\Models\TodosModel;

class TodosController
{
    private $renderer;
    private $todosModel;

    public function __construct($renderer, TodosModel $todosModel)
    {
        $this->renderer = $renderer;
        $this->todosModel = $todosModel;
    }

    public function __invoke(Request $request, Response $response, array $args)
    {
        $args['todos'] = $this->todosModel->getPendingTodos();
        $args['completed'] = $this->todosModel->getCompletedTodos();
        return $this->renderer->render($response, 'todos.phtml', $args);
    }
}