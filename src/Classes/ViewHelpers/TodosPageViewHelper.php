<?php
namespace Todos\ViewHelpers;

class TodosPageViewHelper
{
    public static function outputPendingTodos($todos)
    {
        $html = '';
        // var_dump($todos);
        foreach ($todos as $todo) {
            $html .= $todo['id'] . '- ' . $todo['todo'] . "<a href='/todo_" . $todo['id'] . "'> mark as completed</a>" . '<br>';
        }
        return $html;
    }

    public static function outputCompletedTodos($completed)
    {
        $html = '';
        foreach ($completed as $todo) {
            $html .= $todo['id'] . '- ' . $todo['todo'] . '<br>';
        }
        return $html;
    }
}