<?php 
session_start();
  
  if((!isset ($_SESSION["nome"])) and (!isset ($_SESSION["senha"])))
{
  unset($_SESSION["nome"]);
  unset($_SESSION["senha"]);
  header('location:index.html');
  }
    $nome_sessao =$_SESSION['nome'];
?>

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

<nav class="navegacao navbar navbar-expand-md cornav fixed-top">
  <a class="navbar-brand ativo" href="index.html">IF Science Club</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link  lista" href="admin.php"><i class="fas fa-landmark"></i> Início</a>
      </li>
      <li class="nav-item">
        <a class="nav-link lista" href="config.php"><i class="fas fa-brain"></i> Configurações</a>
      </li>
      <li class="nav-item">
        <a class="nav-link ativo" href="cadastron.php"><i class="fas fa-money-check"></i> Cadastro de Notícias</a>
      </li>
      <li class="nav-item">
        <a class="nav-link lista" href="cadastrop.php"></li><i class="fas fa-question"></i> Cadastro de Perguntas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link lista" href="resp.php"></li><i class="fas fa-check"></i></i> Respostas</a>
      </li>
        </div>
      </li>
    </ul>
    <form action="sair.php">
    <button class="btn botao" type="submit"><i class="fas fa-power-off"></i> Sair</button>  </form>
  </div>
</nav>

<div id="demo" class="carousel slide carrosel" data-ride="carousel">
    <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
  </ul>

      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="first-slide" src="Teste.jpg" alt="First slide">
          <div class="container">
          <div class="carousel-caption">
        <h1 class="corcar">Área de administrador</h1>
        <p class="corcar">Bem Vindo!</p>
      </div>
    </div>
        </div>
      
        <div class="carousel-item">
              <img class="first-slide" src="Teste2.jpg" alt="First slide">
          <div class="container">
          <div class="carousel-caption">
        <h1 class="corcar">Site em Construção</h1>
        <p class="corcar">Em Breve</p>
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
	<form method="post" action="inserir.php" enctype="multipart/form-data">
      <h6>Publicar notícia</h6>
      <div class="form-group">
  <input type="text" class="form-control" id="usr" placeholder="Título" name="titulo" required>
      </div>
      <div class="form-group">
        <textarea class="form-control" id="usr" placeholder="conteudo" name="conteudo"  required maxlength="200"></textarea> 
      </div>
        <div class="form-group">
        <input type="date" class="form-control" name="data" required>
      </div>
      <div class="form-group">
        <input type="file" class="form-control" name="imagem" required>
      </div>
          <button class="btn botao" type="submit">Cadastrar notícia</button>  
        </div>
      </div>
      </form>
</div>
<div class="container">
	<form method="post" action="excluirn.php">
      <h6>Excluir notícia</h6>
      <div class="form-group">
  <input type="text" class="form-control" id="usr" placeholder="Código da notícia" name="codig">
      </div>
      <button class="btn botao" type="submit">Excluir notícia</button>
  </form>
</div>
</main>
<footer class="rodape navbar justify-content-center">
  <p><i class="far fa-copyright"></i> IF Science Club, desde 2019</p>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.8.1/js/all.js" integrity="sha384-g5uSoOSBd7KkhAMlnQILrecXvzst9TdC09/VM+pjDTCM+1il8RHz5fKANTFFb+gQ" crossorigin="anonymous"></script>
</body>
</html>