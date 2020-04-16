<?
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tcc1";


$cod = $_POST['cod'];
$pontos = $_POST['ponto'];

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "UPDATE resposta SET pontos='$pontos' WHERE cod='$cod'";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "<script>alert('Cadastrado com Sucesso!');location.href=\"admin.php\";</script>";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
$conn = null;
?> 