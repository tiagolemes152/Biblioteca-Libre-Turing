<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Consulta da Tabela Alunos</title>
  <link rel="stylesheet" href="../style.css">
  <link rel="icon" type="image/png" href="../images/favicon.ico">
  
</head>
<body>
<?php 
	require_once "..\BD\conexaoBD.php";
	$stmt = $conexao->query("SELECT * FROM alunos");
	$registros = $stmt->fetchAll();
?>

<main>
    <h1>Lista de Usuários</h1>
	<div class="container-tabela">
            <table>
                <thead>
                    <tr>
                        <th>RA</th>
                        <th>Nome do Aluno</th>
                        <th>CPF</th>
                        <th>Nasc.</th>
                        <th>Curso</th>
                        <th>Email</th>
                        <th>Telefone</th>
                    </tr>
                </thead>
        <tbody>
            <?php foreach ($registros as $r){ ?>
                <tr>
                    <td><?= htmlspecialchars($r['ra']) ?></td>
                    <td><?= htmlspecialchars($r['nome_aluno']) ?></td>
                    <td><?= htmlspecialchars($r['cpf']) ?></td>
					<td><?= htmlspecialchars($r['data_nasc']) ?></td>
                    <td><?= htmlspecialchars($r['curso']) ?></td>
                    <td><?= htmlspecialchars($r['email']) ?></td>
                    <td><?= htmlspecialchars($r['telefone']) ?></td>
                </tr>
        
            <?php } ?>
        </tbody>
        </table>
    </div>
    <div class = "container-consulta">
            <a class="link-php" href="../pages/consulta-usuario.html">+ Nova Consulta</a>
            <a class="link-php" href="../pages/menu.html">Voltar Para o Menu</a>
        </div>
    
</main>

</body>
</html>