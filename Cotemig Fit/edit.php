<?php
require ('conexao.php');

if (isset($_GET["id_aluno"])) {
    $idAluno = $_GET["id_aluno"];

    // Função para listar todos os registros do banco de dados
    function listarRegistros($conexao, $idAluno) {
        $sql = "SELECT * FROM aluno WHERE id_aluno = $idAluno";
        $stmt = $conexao->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        // Listar registros
        $registros = listarRegistros($conexao, $idAluno);
        foreach ($registros as $registro) {
            if ($registro['id_aluno'] == $idAluno) {
                $aux = true;
            }
        }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Editar Cliente</title>
</head>
<body>
    <h1>Editar Usuario</h1>
    <?php if (isset($aux)) : ?>
        <form action="update.php" method="post">
            <input type="hidden" name="id_aluno" value="<?php echo $registro['id_aluno']; ?>">
            <label>Nome:</label>
            <input type="text" name="nome" value="<?php echo $registro['nome']; ?>" required>
            <br>
            <label>Email:</label>
            <input type="email" name="email" value="<?php echo $registro['email']; ?>" required>
            <br>
            <label>Sexo:</label>
            <input type="text" name="sexo" value="<?php echo $registro['sexo']; ?>" required>
            <br>
            <label>Endereço:</label>
            <input type="text" name="endereco" value="<?php echo $registro['endereco']; ?>" required>
            <br>
            <label>Número:</label>
            <input type="text" name="numero" value="<?php echo $registro['numero']; ?>" required>
            <br>
            <label>Complemento:</label>
            <input type="text" name="complemento" value="<?php echo $registro['complemento']; ?>" required>
            <br>
            <label>Bairro:</label>
            <input type="text" name="bairro" value="<?php echo $registro['bairro']; ?>" required>
            <br>
            <label>Cidade:</label>
            <input type="text" name="cidade" value="<?php echo $registro['cidade']; ?>" required>
            <br>
            <label>UF:</label>
            <input type="text" name="uf" value="<?php echo $registro['uf']; ?>" required>
            <br>
            <label>Modalidade:</label>
            <input type="text" name="modalidade" value="<?php echo $registro['modalidade']; ?>" required>
            <br>
            <input type="submit" value="Salvar">
        </form>
    <?php else : ?>
        <p>Usuario não encontrado.</p>
    <?php endif; ?>
</body>
</html>
