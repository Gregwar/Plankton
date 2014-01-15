<?php

class Model
{
    protected $pdo;

    public function __construct($database, $user, $password, $host = 'localhost')
    {
        $this->pdo = new \PDO('mysql:dbname='.$database.';host='.$host, $user, $password);
        $this->pdo->exec('SET CHARSET UTF8');
    }

    public function getFilms()
    {
        return $this->pdo->query('SELECT * FROM films');
    }
}
