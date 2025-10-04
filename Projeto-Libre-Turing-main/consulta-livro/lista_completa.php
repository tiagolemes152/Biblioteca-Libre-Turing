<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Lista Completa de Títulos</title>
  <link rel="stylesheet" href="../style.css">
  <link rel="icon" type="image/png" href="../images/favicon.ico">
</head>
<body>
<?php 
	require_once "..\BD\conexaoBD.php";
	$stmt = $conexao->query("SELECT * FROM livros");
	$registros = $stmt->fetchAll();
?>

<main>
    <h1>Lista de Registros</h1>
    
    <div class="container-tabela">
	<table>
        <thead>
            <tr>
                <th>isbn</th>
                <th>titulo</th>
                <th>autor</th>
                <th>categoria</th>
                <th>ano</th>
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
                        <a class = "excluir" href="excluir_livro.php?id=<?= $r['id'] ?>" onclick="return confirm('Tem certeza que deseja excluir este registro?');">Excluir</a>
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
</main>

</body>
</html>

