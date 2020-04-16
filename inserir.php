<?
$servername = "localhost";
$username = "root";
$password = "";
$db = "tcc1";

$titulo = $_POST['titulo'];
$conteudo = $_POST['conteudo'];
$data = $_POST["data"];

$mysqli = new mysqli($servername, $username, $password, $db);
if($mysqli->connect_errno)
  echo "Falha na conexão: (".$mysqli->connect_errno.") ".$mysqli->connect_error;

      $msg = false;
  if(isset($_FILES['imagem'])){
    $extensao = strtolower(substr($_FILES['imagem']['name'], -4)); //pega a extensao do arquivo
    $novo_nome = md5(time()) . $extensao; //define o nome do arquivo
    $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo
    move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
    $sql_code = "INSERT INTO noticias (imagem, data, conteudo, titulo) VALUES('$novo_nome', '$data', '$conteudo', '$titulo')";
    if($mysqli->query($sql_code))
      echo "<script>alert('Cadastrado com Sucesso!');location.href=\"admin.php\";</script>";
    else
      echo "<script>alert('Erro!');location.href=\"admin.php\";</script>";
  }

    /*nomeFinal = time().'.jpg';
    if (move_uploaded_file($imagem['tmp_name'], $nomeFinal)) {
        $tamanhoImg = filesize($nomeFinal); 
 
        $imagem = addslashes(fread(fopen($nomeFinal, "r"), $tamanhoImg)); 
 
        $conn=mysqli_connect($servername,$username,$password) or die("Impossível Conectar"); 
 
        mysqli_select_db($conn, $db) or die("Impossível Conectar"); 
 
        mysqli_query($conn ,"INSERT INTO noticias(imagem, data, conteudo, titulo) VALUES ('$imagem', '$data', '$conteudo', 'titulo')") or
        die("O sistema não foi capaz de executar a query"); 
 
        unlink($nomeFinal);
        echo "<script>alert('Cadastrado com Sucesso!');location.href=\"index.html\";</script>";
        header("location:cadastron.php");
    }*/
 
 
?>