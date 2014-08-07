<?php // Plankton

$root = __DIR__.'/app';
$app = include($root.'/app.php');

function asset($path) {
    $directory = dirname($_SERVER['SCRIPT_NAME']);
    if ($directory[strlen($directory)-1] == '/') {
        $directory = substr($directory, 0, -1);
    }

    return $directory.$path;
}

function path($url = '') {
    return $_SERVER['SCRIPT_NAME'].'/'.$url;
}

function render($page, array $variables = array(), $layout = 'layout') {
    global $app, $root;
    extract($variables);
    include($root.'/views/'.($layout ? $layout : $page).'.php');
}

$page = empty($_SERVER['PATH_INFO']) ? '/' : $_SERVER['PATH_INFO'];

$actions = array();
foreach ($app['controllers'] as $controller) {
    $file = $root.'/controllers/'.$controller.'.php';
    $actions = array_merge($actions, include($file));
}

$app['action'] = isset($actions[$page]) ? $page : '/error';
$action = $actions[$app['action']];

if ($response = $action($app)) {
    if (is_array($response)) {
        render($response[0], $response);
    } else {
        echo $response;
    }
}
