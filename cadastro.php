<?php
$servername = "localhost";
$username = "c4clubedeciencia";
$password = "clube2020";
$dbname = "c4clubedeciencia";

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$rsenha = $_POST['rsenha'];

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT nome FROM usuario WHERE nome='$nome'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) == 0) {
    if ($senha===$rsenha){


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO usuario (nome, email, senha)
VALUES ('$nome', '$email', '$senha')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "<script>alert('Cadastrado com Sucesso!');location.href=\"index.html\";</script>";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

}
else {
    echo "<script>alert('Senhas diferentes!');location.href=\"index.html\";</script>";
} 
} else {
    echo "<script>alert('Nome existente');location.href=\"index.html\";</script>";
}
$conn = null;
?>