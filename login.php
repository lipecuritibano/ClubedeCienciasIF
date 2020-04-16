<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tcc1";

$nome = $_POST['nome'];
$senha = $_POST['senha'];

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT email, senha, nome FROM usuario WHERE nome='$nome' and senha='$senha'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    if ($nome==="Admin") {
    $_SESSION["nome"] = $nome;
    $_SESSION["senha"] = $senha;
    	header('Location: admin.php');
    } else{
    	$_SESSION["nome"] = $nome;
    $_SESSION["senha"] = $senha;
header('Location: user.php');
   }
} else {
    unset ($_SESSION["nome"]);
  unset ($_SESSION["senha"]);
  echo "<script>alert('Usuário ou senha incorretos!');location.href=\"index.html\";</script>";
}

mysqli_close($conn);

?>
