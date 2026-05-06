<!-- Formulário de Feedback -->
<section id="feedback">
    <h2>Deixe seu Feedback</h2>
    <form action="salvar.php" method="POST">
        <input type="text" name="jogador" placeholder="Seu nome" required>
        <textarea name="comentario" placeholder="O que achou do jogo?" required></textarea>
        <button type="submit">Enviar</button>
    </form>
</section>

<!-- Lista de Comentários (Lendo do Banco) -->
<section id="comentarios">
    <?php
    // Certifique-se de que o caminho para o banco está correto em relação ao index.php
    $db = new PDO('sqlite:database/banco.sqlite');
    
    // Cria a tabela se não existir
    $db->exec("CREATE TABLE IF NOT EXISTS feedbacks (id INTEGER PRIMARY KEY, jogador TEXT, comentario TEXT)");
    
    $query = $db->query("SELECT * FROM feedbacks ORDER BY id DESC");
    foreach($query as $row) {
        // htmlspecialchars evita ataques XSS ao exibir comentários de terceiros
        echo "<div class='item'><strong>" . htmlspecialchars($row['jogador']) . ":</strong> " . htmlspecialchars($row['comentario']) . "</div>";
    }
    ?>
</section>