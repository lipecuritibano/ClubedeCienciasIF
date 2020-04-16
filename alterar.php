<?php
session_start();
$nome_sessao =$_SESSION['nome'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tcc1";
$senha = $_POST['senha'];
$rsenha = $_POST['rsenha'];
$nome = $_POST['nome'];
if ($senha===$rsenha) {
    # code...

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE usuario SET nome='$nome', senha='$senha' WHERE nome='$nome_sessao'";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Alterado com Sucesso!');location.href=\"index.html\";</script>";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
} else {
    echo "<script>alert('Senhas não estão iguais!');location.href=\"index.html\";</script>";
}
?>
