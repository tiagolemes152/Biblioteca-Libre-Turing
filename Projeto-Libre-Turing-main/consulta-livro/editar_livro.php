<?php
	require_once "../BD/conexaoBD.php";

	if ($_SERVER["REQUEST_METHOD"] === "POST") {
		$id = $_POST['id'];
		$cnl  = $_POST['cadastro-nome-livro'];
		$cil   = $_POST['cadastro-isbn-livro'];
		$cal  = $_POST['cadastro-autor-livro'];
		$ccl = $_POST['cadastro-categoria-livro'];
		$cyl = $_POST['cadastro-ano-livro'];
	

		$stmt = $conexao->prepare("UPDATE livros SET isbn = :cil, 
		titulo = :cnl, autor = :cal, categoria = :ccl, ano = :cyl WHERE id = :id");
		$stmt->execute([
			':cil' => $cil,
            ':cnl' => $cnl,
            ':cal' => $cal,
            ':ccl' => $ccl,
            ':cyl' => $cyl,
			':id' => $id
		]);

		header("Location: lista_completa.php");
		exit;
	}

	if (isset($_GET['id'])) {
		$id = $_GET['id'];

		$stmt = $conexao->prepare("SELECT * FROM livros WHERE id = :id");
		$stmt->execute([':id' => $id]);
		$registro = $stmt->fetch();

		if (!$registro) {
			echo "Registro não encontrado.";
			exit;
		}
	} else {
		echo "ID não fornecido.";
		exit;
	}
?>



<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Atualização de Registros</title>
  <link rel="stylesheet" href="../style.css">
  <link rel="icon" type="image/png" href="images/favicon.ico">
  
</head>
<body>

<main>
    <h1>Editar Registro</h1>
	
	<div class = "container">
		<a href="javascript:history.back();" class="back-link" style="color: #000000ff ">← Cancelar Edição </a>
	    <form class="form-login" method="POST">
    		<input type="hidden" name="id" value="<?= htmlspecialchars($registro['id']) ?>">

    		<label for="cadastro-nome-livro">Nome do Livro</label>
    		<input type="text" id="cadastro-nome-livro" name="cadastro-nome-livro" placeholder="Digite o nome do livro" required value="<?= htmlspecialchars($registro['titulo']) ?>">

    		<label for="cadastro-isbn-livro">ISBN do Livro</label>
    		<input type="text" id="cadastro-isbn-livro" name="cadastro-isbn-livro" placeholder="Digite o ISBN do livro" value="<?= htmlspecialchars($registro['isbn']) ?>">

    		<label for="cadastro-autor-livro">Autor do Livro</label>
    		<input type="text" id="cadastro-autor-livro" name="cadastro-autor-livro" placeholder="Digite o nome do autor" value="<?= htmlspecialchars($registro['autor']) ?>">

    		<label for="cadastro-categoria-livro">Categoria do Livro</label>
    		<input type="text" id="cadastro-categoria-livro" name="cadastro-categoria-livro" placeholder="Digite a categoria do livro" required value="<?= htmlspecialchars($registro['categoria']) ?>">

    		<label for="cadastro-ano-livro">Ano do Livro</label>
    		<input type="number" id="cadastro-ano-livro" name="cadastro-ano-livro" placeholder="Digite o ano de publicação do livro" step="1" value="<?= htmlspecialchars($registro['ano']) ?>">

    		<button type="submit">Salvar Alterações no Registro</button>
		</form>
	</div>

</main>

</body>
</html>
