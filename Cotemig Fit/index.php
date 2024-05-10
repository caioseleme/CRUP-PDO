<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>LISTA DE ALUNO</h1>
    <a href="cadastro_aluno.php">Adicionar Novo Usuario</a>
    <?php
        require ('conexao.php');
        function listarRegistros($conexao) 
        {
            $sql = "SELECT * FROM aluno";
            $stmt = $conexao->query($sql);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        $registros = listarRegistros($conexao);
        echo "<table border='1'>
            <tr>
                <th>idAluno</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Sexo</th>
                <th>Endereço</th>
                <th>Número</th>
                <th>Complemento</th>
                <th>Bairro</th>
                <th>Cidade</th>
                <th>UF</th>
                <th>Modalidade</th>
            </tr>";
        foreach ($registros as $registro) 
        {
            echo "<tr>";
            echo "<td>" . $registro['id_aluno'] . "</td>";
            echo "<td>" . $registro['nome'] . "</td>";
            echo "<td>" . $registro['email'] . "</td>";
            echo "<td>" . $registro['sexo'] . "</td>";
            echo "<td>" . $registro['endereco'] . "</td>";
            echo "<td>" . $registro['numero'] . "</td>";
            echo "<td>" . $registro['complemento'] . "</td>";
            echo "<td>" . $registro['bairro'] . "</td>";
            echo "<td>" . $registro['cidade'] . "</td>";
            echo "<td>" . $registro['uf'] . "</td>";
            echo "<td>" . $registro['modalidade'] . "</td>";
            echo "<td>
                <a href='edit.php?id_aluno=" . $registro['id_aluno'] . "'>Editar</a>
                <a href='delete.php?id_aluno=" . $registro['id_aluno'] . "'>Excluir</a>
            </td>";
        }
            echo "</tr>";
        echo "</table>";
    ?>
</body>
</html>