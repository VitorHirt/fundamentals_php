<?php 

    $post = $_GET;
    require_once __DIR__ . '/../helpers/search.php';

    $jsonPath = __DIR__ . '/../model/livros.json';
    $listBook = json_decode(file_get_contents($jsonPath), true); 

    if($post['search'] != null){
        $search = $post['search'];
        $listBook = search($search);
    }  

    // $uri = $_SERVER['REQUEST_URI']; 
    // $id = explode("/", $uri);

    // // $livro = array_filter($listaDeLivros, fn($livro) => $livro['id'] == (int) $id[3]);
    // // $livro = array_values($livro)[0];
    $views = 'book';
    
    require_once __DIR__ . '/../helpers/dump.php';
    require_once __DIR__ . '/../views/layout/layout.php';    



