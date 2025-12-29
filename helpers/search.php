<?php

    function search($term){
        $jsonPath = __DIR__ . '/../model/livros.json';
        $list_book = json_decode(file_get_contents($jsonPath), true);  

        $book = array_filter($list_book, fn($x) => stripos($x['nome'], $term) != false);

        return $book;
    }

?>