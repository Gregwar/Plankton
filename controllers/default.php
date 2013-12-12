<?php return array(
    '/' => function() {
        render('home');
    },
    '/hello' => function() {
        render('hello', array('name' => 
            isset($_GET['name']) ? $_GET['name'] : '?'));
    },
    '/404' => function() {
        render('404');
    }
);
