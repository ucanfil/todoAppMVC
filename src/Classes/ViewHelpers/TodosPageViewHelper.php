<?php
namespace Todos\ViewHelpers;

class TodosPageViewHelper
{
    public static function outputPendingTodos($todos)
    {
        $html = '';
        // var_dump($todos);
        foreach ($todos as $todo) {
            $html .= "<div>" . $todo['todo'] .
                        "<input type='checkbox' name='" . $todo['id'] . "'id='todo_" . $todo['id'] . "'>
                        <label for='todo_" . $todo['id'] . "'> done!</label>
                    </div>";
        }
        return $html;
    }

    public static function outputCompletedTodos($completed)
    {
        $html = '';
        foreach ($completed as $todo) {
            $html .= $todo['todo'] . '<br>';
        }
        return $html;
    }
}