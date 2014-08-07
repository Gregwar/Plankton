<?php return array(
    '/films' => function($app) {
        return array('films',
            'films' => $app['model']->getFilms()
        );
    }
);
