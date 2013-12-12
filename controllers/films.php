<?php return array(
    '/films' => function() {
        global $pdo;
        render('films', array('films' => 
            $pdo->query('SELECT * FROM films')));
    }
);
