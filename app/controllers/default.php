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
        header("HTTP/1.0 404 Not Found");
        header("Status: 404 Not Found");
        http_response_code(404);    
        return array('error');
    }
);
