<?php
// Obtenha os dados do formul�rio
$credor = $_POST['credor'];

// Fa�a a conex�o com o banco de dados
$servername = "localhost:3306"; // Altere para o endere�o do servidor do banco de dados
$username = " fadulwe1_lion"; // Altere para o nome de usu�rio do banco de dados
$password = "Bucho2021@"; // Altere para a senha do banco de dados
$dbname = " fadulwe1_lion"; // Altere para o nome do banco de dados

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifique a conex�o
if ($conn->connect_error) {
    die("Falha na conex�o com o banco de dados: " . $conn->connect_error);
}

// Prepare a consulta SQL para inserir os dados na tabela de credores
$sql = "INSERT INTO credores (nome) VALUES ('$credor')";

if ($conn->query($sql) === TRUE) {
    echo "Credor cadastrado com sucesso";
} else {
    echo "Erro ao cadastrar o credor: " . $conn->error;
}

// Feche a conex�o com o banco de dados
$conn->close();
?>
