<?php
    $usuario = $_COOKIE["usuario"];
    $senha = $_COOKIE["senha"];

require_once("conexao.php");

$sql = "SELECT * FROM clientes WHERE username = '$login' AND password = '$senha'";

$result = $con->query($sql);

if ($result->num_rows != 1) {
    header("Location: erro.php");
    exit(0);
}
?>