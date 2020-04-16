<?php
session_start();
$nome_sessao =$_SESSION['nome'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tcc1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM usuario WHERE nome='$nome_sessao'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    header('Location: index.html');
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>