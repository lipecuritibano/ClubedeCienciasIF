<?
session_start();
  
  if((!isset ($_SESSION["nome"])) and (!isset ($_SESSION["senha"])))
{
  unset($_SESSION["nome"]);
  unset($_SESSION["senha"]);
  header('location:index.html');
  }
    $nome_sessao =$_SESSION['nome'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tcc1";

$publicacao = $_POST['publicacao'];

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO forum (publicacao, nome)
VALUES ('$publicacao', '$nome_sessao')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "<script>alert('Cadastrado com Sucesso!');location.href=\"user.php\";</script>";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
    $conn = null;
?> 