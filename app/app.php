<?php 

include(__DIR__.'/autoload.php');

return array(
    'controllers' => array('default', 'films'),
    'model' => new \Model('cinema', 'root', 'root'),

    'request' => array(
        'parameters' => array_merge($_GET, $_POST),
        'method' => $_SERVER['REQUEST_METHOD'],
    )
);
