<?php return array(
    '/' => function() {
        return array('home');
    },
    '/hello' => function() {
        return array('hello', array('name' => 
            isset($_GET['name']) ? $_GET['name'] : '?'));
    },
    '/404' => function() {
        return array('404');
    }
);
