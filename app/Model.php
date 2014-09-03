<?php

class Model
{
    protected $pdo = null;

    public function __construct($database, $user, $password, $host = 'localhost')
    {
        try {
            $this->pdo = new \PDO('mysql:dbname='.$database.';host='.$host, $user, $password);
            $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            $this->pdo->exec('SET CHARSET UTF8');
        } catch (\PDOException $e) {
            $this->pdo = null;
        }
    }

    public function getFilms()
    {
        if ($this->pdo !== null) {
            return $this->pdo->query('SELECT * FROM films');
        } else {
            return array(
                array('name' => 'Lord of the ring'),
                array('name' => 'Star wars'),
            );
        }
    }
}
