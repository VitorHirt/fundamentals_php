<?php
    $views = 'book';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>404 - Página não encontrada</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Ícones -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #0d6efd, #6610f2);
            color: #fff;
        }

        .error-box {
            max-width: 500px;
        }

        .error-code {
            font-size: 8rem;
            font-weight: 800;
            line-height: 1;
        }

        .btn-home {
            background: #fff;
            color: #0d6efd;
            border-radius: 50px;
            padding: 10px 30px;
            font-weight: 600;
        }

        .btn-home:hover {
            background: #f1f1f1;
            color: #0a58ca;
        }
    </style>
</head>
<body class="d-flex align-items-center justify-content-center text-center">
    <div class="error-box">
        <div class="mb-4">
            <i class="bi bi-exclamation-triangle-fill display-1"></i>
        </div>

        <div class="error-code">404</div>

        <h2 class="mt-3">Página não encontrada</h2>

        <p class="text-light mt-3">
            Ops! A página que você está procurando não existe ou foi removida.
        </p>

        <a href="/views/<?= $views ?>.php/" class="btn btn-home mt-4">
            <i class="bi bi-house-door-fill me-2"></i> Voltar para o início
        </a>
    </div>
</body>
</html>
