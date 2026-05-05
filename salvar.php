<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $jogador = $_POST['jogador'];
    $comentario = $_POST['comentario'];

    try {
        $db = new PDO('sqlite:database/banco.sqlite');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $db->prepare("INSERT INTO feedbacks (jogador, comentario) VALUES (:j, :c)");
        $stmt->bindParam(':j', $jogador);
        $stmt->bindParam(':c', $comentario);
        $stmt->execute();

        header("Location: index.php"); // Volta para a página inicial
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
}
?>