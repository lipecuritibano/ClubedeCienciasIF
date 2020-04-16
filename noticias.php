<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>IF Science Club</title>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="favicon.png" type="image/x-icon" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="bootstrap">
  <link rel="stylesheet" type="text/css" href="font-awesome.css">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<header>
<nav class="navegacao navbar navbar-expand-md text-warning text-white cornav fixed-top">
  <a class="navbar-brand ativo" href="index.html">IF Science Club</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link lista" href="index.html"><i class="fas fa-landmark"></i> Início</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link ativo" href="noticias.php"><i class="fas fa-clipboard-list"></i> Notícias<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link lista" href="astronomia.html"><i class="fas fa-rocket"></i> Astronomia</a>
      </li>
      <li class="nav-item">
        <a class="nav-link lista" href="biologia.html"><i class="fas fa-dna"></i></i> Biologia</a>
      </li>
      <li class="nav-item">
        <a class="nav-link lista" href="fisica.html"><i class="fas fa-atom"></i></i></i> Física</a>
      </li>
      <li class="nav-item">
        <a class="nav-link lista" href="quimica.html"><i class="fas fa-flask"></i> Química</a>
      </li>
      <li class="nav-item">
        <a class="nav-link lista" href="sobre.html"><i class="far fa-address-card"></i> Sobre</a>
      </li>
        </div>
      </li>
    </ul>
  </div>
</nav>
</header>
	<!--Carrosel-->
<div id="demo" class="carousel slide carrosel" data-ride="carousel">
    <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
  </ul>

      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="first-slide" src="noticias.jpg" alt="First slide">
          <div class="container">
          <div class="carousel-caption">
        <h1 class="corcar">Notícias</h1>
        <p class="corcar">Informações sobre os encontros</p>
      </div>
    </div>
        </div>
      
        <div class="carousel-item">
              <img class="first-slide" src="noticia2.jpg" alt="First slide">
          <div class="container">
          <div class="carousel-caption">
        <h1 class="corcar">Leia!</h1>
        <p class="corcar">Ler as notícias são uma boa base para conversar no fórum</p>
      </div>
    </div>
        </div>
      </div>

      <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="seta"><i class="fas fa-angle-left"></i></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="seta"><i class="fas fa-angle-right"></i></span>
  </a>
</div>
<div class="container">
<?

$servername = "localhost";
$username = "root";
$password = "";
$db = "tcc1";



$conn = mysqli_connect($servername, $username, $password, $db);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM noticias ORDER BY cod DESC";

$resultado = mysqli_query($conn, $sql) or die ("Não foi possível realizar a consulta ao banco de dados");
/*$linha->*/
 
while ($linha=mysqli_fetch_array($resultado)) { 
  $cod = $linha["cod"];
$data = $linha["data"];
$titulo = $linha["titulo"];
$conteudo = $linha["conteudo"];
$imagem = $linha["imagem"];
    echo "<div class='row'>";
    echo "<div class='col-md-3'>";
    echo "<img src='upload/$imagem' width='200' height='140' class='rounded'>";
    echo "</div>";
    echo "<div class='col-md-4'>";
    echo "$data";
    echo "<br>";
    echo "$titulo";
    echo "<br>";
    echo "$conteudo";
    echo "<br>";
    echo "<hr>";
    echo "</div>";
    echo "</div>";


} 

/*echo "<img src='$imagem' width='200' height='140'>";*/

?> 
</div>

<footer class="rodape navbar justify-content-center">
  <h6><i class="far fa-copyright"></i> IF Science Club, desde 2019</h6>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.8.1/js/all.js" integrity="sha384-g5uSoOSBd7KkhAMlnQILrecXvzst9TdC09/VM+pjDTCM+1il8RHz5fKANTFFb+gQ" crossorigin="anonymous"></script>

</body>
</html>