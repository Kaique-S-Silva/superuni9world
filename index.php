<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Meu Projeto de Jogo</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <header>
        <h1>My Game</h1>
    </header>

    <main>
        <!-- Área do Jogo -->
        <section id="game-area">
            <iframe frameborder="0" 
                src="https://itch.io/embed-upload/17423334?color=333333" 
                allowfullscreen="" 
                width="800" 
                height="600">
                <a href="https://merthiz.itch.io/my-game">Hosted by Itch.io</a>
            </iframe>
        </section>

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
            $db = new PDO('sqlite:database/banco.sqlite');
            // Cria a tabela se não existir (muito útil para o seu professor)
            $db->exec("CREATE TABLE IF NOT EXISTS feedbacks (id INTEGER PRIMARY KEY, jogador TEXT, comentario TEXT)");
            
            $query = $db->query("SELECT * FROM feedbacks ORDER BY id DESC");
            foreach($query as $row) {
                echo "<div class='item'><strong>{$row['jogador']}:</strong> {$row['comentario']}</div>";
            }
            ?>
        </section>
    </main>
</body>
</html>