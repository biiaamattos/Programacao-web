<?php
    require_once("validarestrito.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acesso restrito</title>
</head>
<body>
    <h1>Dentro de uma página restrita</h1>
    <p><button onclick="window.location.replace('sair.php')">Logout</button></p>
</body>
</html>