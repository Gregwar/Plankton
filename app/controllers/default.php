<?php return array(
    '/' => function() {
        return array('home');
    },
    '/hello' => function($app) {
        $parameters = $app['request']['parameters'];
        return array('hello', array(
            'name' => isset($parameters['name']) ? $parameters['name'] : 'you'
        ));
    },
    '/404' => function() {
        return array('404');
    }
);
