<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/', function (Request $request, Response $response, array $args) {
    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});

$app->get('/todos', 'TodosController');
$app->post('/todos', 'NewTodoController');
$app->post('/status', 'UpdateStatusController');