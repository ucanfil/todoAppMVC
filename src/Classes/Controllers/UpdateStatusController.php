<?php
namespace Todos\Controllers;

use Todos\Models\TodosModel;
use Slim\Http\Request;
use Slim\Http\Response;


class UpdateStatusController
{
    private $renderer;
    private $todosModel;

    public function __construct($renderer, TodosModel $todosModel)
    {
        $this->renderer = $renderer;
        $this->todosModel = $todosModel;
    }

    public function __invoke(Request $request, Response $response, $args)
    {
        $statuses = $request->getParsedBody();
        if (!empty($statuses)) {
            foreach ($statuses as $key => $status) {
                $this->todosModel->updateStatus($key, $status == 'on' ? 1 : 0);
            }
        }
        $args['todos'] = $this->todosModel->getPendingTodos();
        $args['completed'] = $this->todosModel->getCompletedTodos();
        return $this->renderer->render($response, 'todos.phtml', $args);
    }
}