<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">

    <title>
        <?php yieldSection('title', 'Bookwise'); ?>
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="<?= asset('assets/custom/custom.css') ?>">
    <script src="<?= asset('assets/custom/custom.js') ?>"></script>

    <?php stack('styles'); ?>
</head>
<body>

    <?php includeView('client/layouts/partial/header.php'); ?>

    <?php yieldSection('content'); ?>

    <?php stack('scripts'); ?>
</body>
</html>
