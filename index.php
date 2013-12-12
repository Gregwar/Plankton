<?php

$app = include(__DIR__.'/app.php');

if ($app['pdo_enable']) {
    $pdo = new \PDO($app['pdo_dsn'], $app['pdo_user'], 
        $app['pdo_password']);
    $pdo->exec('SET CHARSET UTF8');
}

function path($url) {
    return $_SERVER['SCRIPT_NAME'].'/'.$url;
}

function render($page, array $variables = array()) {
    global $app;
    extract($variables);
    include(__DIR__.'/views/layout.php');
}

$page = isset($_SERVER['PATH_INFO']) ?
    $_SERVER['PATH_INFO'] : '/';

$actions = array();
foreach ($app['controllers'] as $controller) {
    $actions = array_merge($actions, 
        include(__DIR__.'/controllers/'.$controller.'.php'));
}

$action = isset($actions[$page]) ? $actions[$page] 
    : $actions['/404'];
if ($response = $action()) {
    if (is_array($response)) {
        render($response[0], isset($response[1]) ? $response[1] 
            : array());
    } else {
        echo $response;
    }
}
