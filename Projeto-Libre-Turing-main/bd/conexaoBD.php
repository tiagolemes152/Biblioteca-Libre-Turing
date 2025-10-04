<?php
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'libre_turing';

try 
{
    $dsn = "mysql:host=$servidor;dbname=$banco;charset=utf8"; 

    $conexao = new PDO($dsn, $usuario, $senha);
    
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} 
catch (PDOException $e)
{
    echo "Erro na conexão com o servidor: " . $e->getMessage();
}
?>

