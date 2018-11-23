<?php
namespace Todos\Models;

class TodosModel
{
    private $db;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function getPendingTodos()
    {
        $query = $this->db->prepare('SELECT `todo`, `id`, `status` FROM `todos` WHERE `status` = 0 ORDER BY `id`');
        $query->execute();
        return $query->fetchAll();
    }

    public function getCompletedTodos()
    {
        $query = $this->db->prepare('SELECT `todo`, `id` FROM `todos` WHERE `status` = 1 ORDER BY `id`');
        $query->execute();
        return $query->fetchAll();
    }

    public function addNewTodo(string $newTodo)
    {
        $query = $this->db->prepare('INSERT INTO `todos` (`todo`) VALUES (:query)');
        $query->execute([':query' => $newTodo]);
    }
}
