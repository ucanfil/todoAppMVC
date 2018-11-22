<?php
namespace Todos\ViewHelpers;

class TodosPageViewHelper
{
    public static function outputTodos($todos)
    {
        $html = '';
        // var_dump($todos);
        foreach ($todos as $todo) {
            $html .= $todo['todo'] . '<br>';
        }
        return $html;
    }
}