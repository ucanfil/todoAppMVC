<?php
namespace Todos\Factories;

use Todos\Controllers\TodosController;


class TodosControllerFactory
{
    public function __invoke($dic)
    {
        $renderer = $dic->get('renderer');
        $todosModel = $dic->get('TodosModel');
        return new TodosController($renderer, $todosModel);
    }
}
