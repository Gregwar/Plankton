<?php return array(
    '/films' => function() {
        global $pdo;

        return array('films', array('films' => 
            $pdo->query('SELECT * FROM films')));
    }
);
