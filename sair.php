<?php  
session_start();
if(isset($_SESSION["nome"]) and isset($_SESSION["senha"])){
    session_destroy();
    header("Location:index.html");
}
?>