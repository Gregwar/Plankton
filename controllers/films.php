<?php return array(
    '/films' => function($app) {
        return array('films', array('films' => 
            $app['pdo']->query('SELECT * FROM films')));
    }
);
