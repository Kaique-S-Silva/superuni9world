<?php
// Arquivo principal do site: Inclui o header, carrega dinamicamente a página baseada no parâmetro 'aba' da URL (padrão: homepage), e inclui o footer.
include('components/header.php');
?>

<main>
    <?php
    $aba = $_GET['aba'] ?? 'homepage'; // Define 'homepage' como aba padrão se nenhum parâmetro for passado
    $arquivo = "pages/{$aba}.php";

    // Verifica se o arquivo da página existe; se não, carrega a página de erro
    if (file_exists($arquivo)) {
        include($arquivo);
    } else {
        include("pages/error.php");
    }
    ?>
</main>

<?php include('components/footer.php'); ?>