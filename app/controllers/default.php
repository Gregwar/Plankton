<?php return array(
    '/' => function() {
        return array('home');
    },
    '/hello' => function($app) {
        $request = $app['request'];
        return array('hello', array(
            'name' => isset($request['name']) ? $request['name'] : '?'
        ));
    },
    '/404' => function() {
        return array('404');
    }
);
