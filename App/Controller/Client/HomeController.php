<?php

namespace App\Controller\Client;

use Functions;
use Model\Database;

class HomeController
{
    private $functions;
    private $database;

    public function __construct(Functions $functions, Database $db)
    {
        $this->functions = $functions;
        $this->database = $db;
    }

    public function index()
    {
        $data['db'] = $this->database->db();
        extract($data);

        return include $this->functions->view("client.layout.layout");
    }
}
