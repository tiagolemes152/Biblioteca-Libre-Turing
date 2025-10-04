<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado da Consulta</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="icon" type="image/png" href="../images/favicon.ico">
</head>
<body>
<?php 
    require_once "..\BD\conexaoBD.php";

    // Pega o termo de busca enviado pelo formulário
    $termo_busca = $_POST['consulta-livro'] ?? '';

    // Prepara a query de forma segura para evitar SQL Injection
    // O LIKE com '%' busca por qualquer livro que contenha o termo digitado
    $sql = "SELECT * FROM livros WHERE titulo LIKE ?";
    $stmt = $conexao->prepare($sql);
    $stmt->execute(["%$termo_busca%"]); // O valor é passado aqui
    
    $registros = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<main>
    <h1>Resultados para: "<?= htmlspecialchars($termo_busca) ?>"</h1>
    
    <?php if (count($registros) > 0): ?>
        <div class="container-tabela">
        <table>
            <thead>
                <tr>
                    <th>ISBN</th>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Categoria</th>
                    <th>Ano</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($registros as $r){ ?>
                    <tr>
                        <td><?= htmlspecialchars($r['isbn']) ?></td>
                        <td><?= htmlspecialchars($r['titulo']) ?></td>
                        <td><?= htmlspecialchars($r['autor']) ?></td>
                        <td><?= htmlspecialchars($r['categoria']) ?></td>
                        <td><?= htmlspecialchars($r['ano']) ?></td>
                        <td>
                            <a class="editar" href="editar_livro.php?id=<?= $r['id'] ?>">Editar</a>
                        </td>
                        <td>
                            <a class ="excluir" href="excluir_livro.php?id=<?= $r['id'] ?>" onclick="return confirm('Tem certeza que deseja excluir este registro?');">Excluir</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        </div>
        <div class = "container-consulta">
            <a class="link-php" href="../pages/consulta-livro.html">+ Nova Consulta</a>
            <a class="link-php" href="../pages/menu.html">Voltar Para o Menu</a>
        </div>
    <?php else: ?>
        <p>Nenhum livro encontrado com este título.</p>
        <div class = "container-consulta">
            <a class="link-php" href="../pages/consulta-livro.html">+ Nova Consulta</a>
            <a class="link-php" href="../pages/menu.html">Voltar Para o Menu</a>
        </div>
    <?php endif; ?>

</main>
</body>
</html>