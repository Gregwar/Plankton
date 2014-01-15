<?php 

include(__DIR__.'/autoload.php');

return array(
    'controllers' => array('default', 'films'),
    'model' => new \Model('cinema', 'root', 'root'),
);
