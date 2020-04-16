<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "tcc1";
    $codn = $_GET["codn"];
 
    $conn=mysqli_connect($servername,$username,$password) or die("Impossível conectar ao banco."); 
    mysqli_select_db($conn ,$db) or die("Impossível conectar ao banco."); 
    $result=mysqli_query($conn, "SELECT * FROM noticias WHERE cod=$codn") or die("Impossível executar a query "); 
    $linha=mysqli_fetch_object($result); 
    Header( "Content-type: image/gif"); 
    echo $linha->imagem; 
?>