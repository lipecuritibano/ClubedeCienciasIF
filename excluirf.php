<?

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tcc1";
$cod = $_POST['codig'];
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "DELETE FROM forum WHERE cod='$cod'";
$resultado = mysqli_query($conn, $sql) or die ("Não foi possível excluir os dados.");
echo "<script>alert('Excluído com Sucesso!');location.href=\"admin.php\";</script>";

?> 