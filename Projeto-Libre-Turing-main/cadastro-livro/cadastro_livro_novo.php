<?php
// 1. Inicia a sessão.
session_start();

require_once "..\BD\conexaoBD.php";

// Define um caminho para redirecionamento. 
$redirect_path = '../pages/cadastro-novo.php'; // <-- Mudança para melhor UX

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $cnl = $_POST['cadastro-nome-livro'] ?? '';
    $cil = $_POST['cadastro-isbn-livro'] ?? '';
    $cal = $_POST['cadastro-autor-livro'] ?? '';
    $ccl = $_POST['cadastro-categoria-livro'] ?? '';
    $cyl = $_POST['cadastro-ano-livro'] ?? '';

    try {
        $sql = "INSERT INTO livros (isbn, titulo, autor, categoria, ano) VALUES (:cil, :cnl, :cal, :ccl, :cyl)";
        $stmt = $conexao->prepare($sql);
        $stmt->execute([
            ':cil' => $cil,
            ':cnl' => $cnl,
            ':cal' => $cal,
            ':ccl' => $ccl,
            ':cyl' => $cyl
        ]);

        // 2. Guarda a mensagem de sucesso na sessão
        $_SESSION['message'] = "Livro cadastrado com sucesso!";

    } catch (PDOException $e) {
        // 3. Guarda a mensagem de erro na sessão
        $_SESSION['message'] = "Erro ao cadastrar: " . $e->getMessage();
    }
} else {
    $_SESSION['message'] = "Requisição inválida.";
}

// 4. Redireciona o usuário de volta para o formulário
header('Location: ' . $redirect_path); // Melhoria na UX

exit(); // Garante que o script pare de ser executado após o redirecionamento

?>

