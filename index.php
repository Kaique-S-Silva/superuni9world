<?php include('components/header.php'); ?>

<main>
    <?php
    $aba = $_GET['aba'] ?? 'homepage'; // Define 'homepage' como aba padrão
    $arquivo = "pages/{$aba}.php";

    if (file_exists($arquivo)) {
        include($arquivo);
    } else {
        include("pages/error.php");
    }
    ?>
</main>

<?php include('components/footer.php'); ?>