<?php 
    $views = "home";
    require_once __DIR__ . '/../helpers/dump.php';
    require_once __DIR__ . '/../views/layout/layout.php';   
    
    $jsonPath = __DIR__ . '/../model/livros.json';
    $listBook = json_decode(file_get_contents($jsonPath), true); 
    
    $uri = $_SERVER['REQUEST_URI']; 
    $id = explode("/", $uri);
    
    $livro = array_filter($listBook, fn($livro) => $livro['id'] == (int) $id[3]);
    $livro = array_values($livro)[0];
