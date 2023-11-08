<?php
$servername = "localhost"; // Endereço do servidor MySQL (local)
$username = "root"; // Nome de usuário do MySQL
$password = "pedro123"; // Senha do MySQL
$database = "lancamento"; // Nome do banco de dados

// Conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $database);

// Verifica se a conexão foi estabelecida com sucesso
if ($mysqli->connect_errno){
    echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_errno;

}
?>


