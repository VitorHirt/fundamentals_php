<?php 

    $uri = $_SERVER['REQUEST_URI'];
    $id = explode("/", $uri);

    $listaDeLivros = json_decode(file_get_contents('../livros.json'), true); 

    $livro = array_filter($listaDeLivros, fn($livro) => $livro['id'] == (int) $id[3]);
    $livro = array_values($livro)[0];

    include './sidebar.php';
    include './templates/app.php';

?>

<div class="container d-flex justify-content-center mt-5">
    <div class="card" style="width: 50rem;">
        <img src="<?php echo $livro['url'] ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><i class="bi bi-book"></i> <?php echo $livro['nome'] ?></h5>
            <p class="card-text"><?php echo $livro['descricao'] ?></p>
            <p class="card-text badge text-bg-info fs-6">Páginas: <?php echo $livro['paginas'] ?></p>
            <p class="card-text badge text-bg-warning fs-6">
                <?php for ($i = 0; $i < $livro['avaliacao']; $i++): ?>
                    <i class="bi bi-star-fill"></i>
                <?php endfor ?>
            </p> 
        </div>
    </div>
</div>

