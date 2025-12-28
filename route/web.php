<?php 

    $notFound = http_response_code(404);

    if($notFound){
        $controller = 'index';
    }

    function router($controller) {
        switch ($controller) {
            case "index":
                require "controller/index.controller.php";
                break;
            case "book":
                require "controller/book.controller.php";
                break;
            default:
                require "controller/index.controller.php";
                break;  
        }
    } 
?>