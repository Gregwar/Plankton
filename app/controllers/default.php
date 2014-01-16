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
    '/error' => function() {
        http_response_code(404);    
        return array('error');
    }
);
