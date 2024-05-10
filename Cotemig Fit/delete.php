<?php
    require ('conexao.php');

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $idAluno = $_GET["id_aluno"];

    function excluirRegistro($conexao, $idAluno) {
        $sql = "DELETE FROM aluno WHERE id_aluno = $idAluno";
        $stmt = $conexao->prepare($sql);
        return $stmt->execute();
    }
}
if (excluirRegistro($conexao, $idAluno)) {
    echo "Registro excluído com sucesso!<br>" . "<a href='index.php'>HOME</a>";
} else {
    echo 'Erro ao excluir o registro.';
}
?>