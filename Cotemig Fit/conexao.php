<?php
$host = 'localhost';
$dbname = 'bd_cotemigfit_3c2';
$username = 'root';
$password = '';
try
{
    $conexao = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Conectado com sucesso";
}catch (PDOException $e){
    die("Conexão falhou: " . $e->getMessage());
}
?>