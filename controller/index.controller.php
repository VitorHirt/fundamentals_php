<?php
    $views = 'home';
    $uri = $_SERVER["REQUEST_URI"];

    $post = $_GET;
    require_once __DIR__ . '/../helpers/search.php';
    require_once __DIR__ . '/../helpers/dump.php';
    require_once __DIR__ . '/../views/layout/layout.php';    

    $jsonPath = __DIR__ . '/../model/livros.json';
    $listBook = json_decode(file_get_contents($jsonPath), true); 

    if($post['search'] != null || $post['search'] != ""){
        $search = $post['search'];
        $listBook = search($search);
    }

    $listBook = is_array($listBook) ? array_values($listBook) : [];
    
    require_once __DIR__ . '/../views/home.php';  
