<?php
// Obtenha os dados do formulário
$credor = $_POST['credor'];

// Faça a conexão com o banco de dados
$servername = "localhost:3306"; // Altere para o endereço do servidor do banco de dados
$username = " fadulwe1_lion"; // Altere para o nome de usuário do banco de dados
$password = "Bucho2021@"; // Altere para a senha do banco de dados
$dbname = " fadulwe1_lion"; // Altere para o nome do banco de dados

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifique a conexão
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Prepare a consulta SQL para inserir os dados na tabela de credores
$sql = "INSERT INTO credores (nome) VALUES ('$credor')";

if ($conn->query($sql) === TRUE) {
    echo "Credor cadastrado com sucesso";
} else {
    echo "Erro ao cadastrar o credor: " . $conn->error;
}

// Feche a conexão com o banco de dados
$conn->close();
?>
