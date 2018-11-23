<?php
namespace Todos\Factories;

use Todos\Controllers\NewTodoController;

class NewTodoControllerFactory
{
    public function __invoke($dic)
    {
        $renderer = $dic->get('renderer');
        $todosModel = $dic->get('TodosModel');
        return new NewTodoController($renderer, $todosModel);
    }
}