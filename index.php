<?php

$config = include(__DIR__.'/config.php');

if ($config['enable_pdo']) {
    $pdo = new \PDO($config['dsn'], $config['user'], 
        $config['password']);
    $pdo->exec('SET CHARSET UTF8');
}

function path($url) {
    return $_SERVER['SCRIPT_NAME'].'/'.$url;
}

function render($page, array $variables = array()) {
    global $config;
    extract($variables);
    include(__DIR__.'/views/layout.php');
}

$page = isset($_SERVER['PATH_INFO']) ?
    $_SERVER['PATH_INFO'] : '/';

$actions = array();
foreach ($config['controllers'] as $controller) {
    $actions = array_merge($actions, 
        include(__DIR__.'/controllers/'.$controller.'.php'));
}

$action = isset($actions[$page]) ? $actions[$page] 
    : $actions['/404'];
$action();
