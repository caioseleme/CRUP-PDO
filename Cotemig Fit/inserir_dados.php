<?php
echo "Inserindo dados abaixo... <br>";
require ('conexao.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    echo $nome = $_POST["nome"];echo '<br>';
    echo $email = $_POST["email"];echo '<br>';
    echo $sexo = $_POST["sexo"];echo '<br>';
    echo $endereco = $_POST["endereco"];echo '<br>';
    echo $numero = $_POST["numero"];echo '<br>';
    echo $complemento = $_POST["complemento"];echo '<br>';
    echo $bairro = $_POST["bairro"];echo '<br>';
    echo $cidade = $_POST["cidade"];echo '<br>';
    echo $uf = $_POST["uf"];echo '<br>';
    echo $modalidade = $_POST["modalidade"];
    echo "<hr>";

    function inserirRegistro($conexao, $nome, $email, $sexo, $endereco, $numero, $complemento, $bairro, $cidade, $uf, $modalidade) 
    {
        $sql = "INSERT INTO aluno (nome, email, sexo, endereco, numero, complemento, bairro, cidade, uf, modalidade) VALUES (:nome, :email, :sexo, :endereco, :numero, :complemento, :bairro, :cidade, :uf, :modalidade)";
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':sexo', $sexo, PDO::PARAM_STR);
        $stmt->bindParam(':endereco', $endereco, PDO::PARAM_STR);
        $stmt->bindParam(':numero', $numero, PDO::PARAM_STR);
        $stmt->bindParam(':complemento', $complemento, PDO::PARAM_STR);
        $stmt->bindParam(':bairro', $bairro, PDO::PARAM_STR);
        $stmt->bindParam(':cidade', $cidade, PDO::PARAM_STR);
        $stmt->bindParam(':uf', $uf, PDO::PARAM_STR);
        $stmt->bindParam(':modalidade', $modalidade, PDO::PARAM_STR);
        return $stmt->execute();
    }
}
if (inserirRegistro($conexao, $nome, $email, $sexo, $endereco, $numero, $complemento, $bairro, $cidade, $uf, $modalidade)) 
{
    echo "Registro inserido com sucesso!<br>" . "<a href='index.php'>HOME</a>";
} else {
    echo 'Erro ao inserir o registro.';
}
?>