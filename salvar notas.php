<?php
// Inclua o arquivo de conexão ao banco de dados
include('conexao.php');

// Verifica se o formulário foi submetido
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $aluno = $_POST['aluno'];
    $disciplina = $_POST['disciplina'];
    $senhaDisciplina = $_POST['senha-disciplina'];
    $nota = $_POST['nota'];

    // Execute a lógica para verificar senhas e inserir a nota no banco de dados
    if ($senhaDisciplina === $disciplinaSenhas[$disciplina]) {
        // Crie uma consulta SQL para inserir a nota no banco de dados
        $sql = "INSERT INTO notas (aluno, disciplina, nota) VALUES ('$aluno', '$disciplina', '$nota')";

        // Execute a consulta
        if ($conn->query($sql) === TRUE) {
            echo "Nota lançada com sucesso!";
        } else {
            echo "Erro ao lançar nota: " . $conn->error;
        }
    } else {
        echo "Senha da disciplina incorreta. Tente novamente.";
    }
}
?>
 