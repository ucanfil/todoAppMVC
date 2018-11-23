<?php
namespace Todos\Factories;

use Todos\Controllers\UpdateStatusController;


class UpdateStatusControllerFactory
{
    public function __invoke($dic)
    {
        $renderer = $dic->get('renderer');
        $todosModel = $dic->get('TodosModel');
        return new UpdateStatusController($renderer, $todosModel);
    }
}