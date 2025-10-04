<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Título - Libre Turing</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="icon" type="image/png" href="../images/favicon.ico">
</head>
<body>
    <?php
        // Inicia a sessão para poder acessar a variável $_SESSION
        session_start();

        // Verifica se a mensagem existe na sessão
        if (isset($_SESSION['message'])) {
            // Exibe o alert com a mensagem
            echo "<script>alert('" . addslashes($_SESSION['message']) . "');</script>";
        
            // Limpa a mensagem da sessão
            unset($_SESSION['message']);
        }
    ?>

    <div class="container">
        <a href="cadastro-livro.html" class="back-link">← Voltar</a>
        <section id="cadastro-livro">
            <h2>Cadastro de Livro</h2>
            <p>Adicione os dados para a catalogação de um novo título</p>

            <form class="form-login" action="../cadastro-livro/cadastro_livro_novo.php" method="POST">
                <label for="cadastro-nome-livro">Nome do Livro</label>
                <input type="text" id="cadastro-nome-livro" name="cadastro-nome-livro" placeholder="Digite o nome do livro" required>

                <label for="cadastro-isbn-livro">ISBN do Livro</label>
                <input type="text" id="cadastro-isbn-livro" name="cadastro-isbn-livro" placeholder="Digite o ISBN do livro">

                <label for="cadastro-autor-livro">Autor do Livro</label>
                <input type="text" id="cadastro-autor-livro" name="cadastro-autor-livro" placeholder="Digite o nome do autor">

                <label for="cadastro-categoria-livro">Categoria do Livro</label>
                <input type="text" id="cadastro-categoria-livro" name="cadastro-categoria-livro" placeholder="Digite a categoria do livro" required>

                <label for="cadastro-ano-livro">Ano do Livro</label>
                <input type="number" id="cadastro-ano-livro" name="cadastro-ano-livro" placeholder="Digite o ano de publicação do livro" step="1">

                <button type="submit">Cadastrar Novo Título</button>
            </form>
        </section>
    </div>
</body>
</html>