<?php

namespace Model;

use PDO;

class Database
{
    public function db()
    {
        $database = new PDO('sqlite:' . __DIR__ . '/database.sqlite');
        $query = $database->query('SELECT * FROM book');
        return $query->fetchAll();
    }
}
