<?php

use App\Controller\Client\HomeController;
use Model\Database;

function routes($module, $controller)
{
    include BASE_PATH . "App/Controller/{$module}/{$controller}.php";
    $helpers = new Functions();
    $db = new Database();
    $action = new HomeController($helpers, $db);
    $action->index();
}
