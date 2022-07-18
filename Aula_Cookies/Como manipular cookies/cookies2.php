<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Outra Página</title>
</head>
<body>
    <h1>Página 2</h1>
    <?php
        //Acessa o valor dos cookies usando essa variável super global
        $nome =  $_COOKIE["nome"];
        $caneta =  $_COOKIE["caneta"];
    ?>

    <!--Apresenta o valor do cookie-->
    <p>Nome: <?=$nome?></p>
    <p>Caneta: <?=$caneta?></p>

    <p><a href="cookies3.php">Próxima Página</a></p>
</body>
</html>