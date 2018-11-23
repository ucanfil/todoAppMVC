<?php
namespace Todos\Controllers;

use Todos\Models\TodosModel;
use Slim\Http\Request;
use Slim\Http\Response;


class NewTodoController
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
        $newTodo = $request->getParsedBody();
        if (!empty($newTodo['todo'])) {
            $result = $this->todosModel->addNewTodo($newTodo['todo']);
        }


        $args['todos'] = $this->todosModel->getPendingTodos();
        $args['completed'] = $this->todosModel->getCompletedTodos();
        
        // $result = $this->todosModel->addNewTodo($newTodo);
        // if ($result) {
        //     return $response->withJson(['success' => true]);
        // } else {
        //     return $response->withJson(['success' => false], 500);
        // }
        return $this->renderer->render($response, 'todos.phtml', $args);
    }
}