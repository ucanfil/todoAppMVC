<?php
namespace Todos\Factories;

use Todos\Models\TodosModel;


class TodosModelFactory
{
    public function __invoke()
    {
        $db = new \PDO('mysql:host=192.168.20.20;dbname=todos', 'root');
        $db->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
        return new TodosModel($db);
    }
}