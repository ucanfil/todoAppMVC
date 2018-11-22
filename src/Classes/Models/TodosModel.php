<?php
namespace Todos\Models;

class TodosModel
{
    private $db;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function getTodos()
    {
        $query = $this->db->prepare('SELECT `todo` FROM `todos` ORDER BY `id`');
        $query->execute();
        return $query->fetchAll();
    }

}