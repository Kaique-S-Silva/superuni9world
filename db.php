<?php
// Caminho absoluto dentro do container Docker
$caminho_banco = '/var/www/html/database/banco.sqlite';

try {
    $pdo = new PDO("sqlite:$caminho_banco");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}