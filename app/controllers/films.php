<?php return array(
    '/films' => function($app) {
        return array('films', array(
            'films' => $app['model']->getFilms()
        ));
    }
);
