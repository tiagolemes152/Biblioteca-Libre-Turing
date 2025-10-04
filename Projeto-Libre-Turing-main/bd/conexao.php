<?php
$servidor = 'localhost';
$usuario = 'root';
$senha = '';

try 
{
    $dsn = "mysql:host=$servidor;charset=utf8"; 

    $conexao = new PDO($dsn, $usuario, $senha);
    
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Conexão com o SGBD estabelecida com sucesso!";
} 
catch (PDOException $e)
{
    echo "Erro na conexão com o servidor: " . $e->getMessage();
}
?>

