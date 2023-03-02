<?php
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

if($usuario == "isabelle" && $senha == "321"){
    header("location: painel.php");
}else{
    header("location: usuario-invalido.php");
}
?>