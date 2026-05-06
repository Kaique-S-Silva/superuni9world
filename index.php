<?php include('components/header.php'); ?>

<main>
    <?php
    $aba = $_GET['aba'] ?? 'homepage'; // Define 'homepage' como aba padrão
    $arquivo = "pages/{$aba}.php";

    if (file_exists($arquivo)) {
        include($arquivo);
    } else {
        echo "<h2>Erro 404</h2><p>Página não encontrada!</p>";
    }
    ?>
</main>

<?php include('components/footer.php'); ?>