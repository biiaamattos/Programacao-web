<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "sistema";

$con = new mysqli($host, $usuario, $senha, $banco);

if(!$con){
    echo "<p style = 'color: red;'>Falha ao conectar ao banco de dados $banco";
}
?>