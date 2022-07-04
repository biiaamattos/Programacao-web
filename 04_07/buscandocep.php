<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar CEP em php </title>

    <style>
        
       
    </style>
</head>

<body>
    <h1>Buscar dados do CEP : </h1>

    <form method="=post" action="">
        <label for="cep"> CEP: </label>
        <input type="text" name="cep" id="cep">

        <input type="submit" value="Buscar">

    </form>

    <?php

    @$cep = trim(($_POST["cep"]));

    if ($cep != "") {

        require_once("funcao.php");

        $endereco = buscarCEP($cep);


    ?>
        <p> CEP: <?= $endereco["cep"] ?></p>

    <?php
    }
    ?>

</body>

</html>