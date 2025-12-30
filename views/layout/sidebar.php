<nav class="navbar navbar-expand-lg bg-dark-subtle">
  <div class="container-fluid">
    <a class="navbar-brand" href="/views/<?php echo $views ?>.php">
      <img src="/images/book.svg" width="50" height="50" alt="Imagem de um livro"> 
      <span>Saraiva</span>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse ms-5" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/views/<?php echo $views ?>.php"><i class="bi bi-house"></i> Home</a>
        </li>
      </ul>
    </div>
  </div>
</nav>