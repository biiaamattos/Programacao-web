<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina 2</title>
</head>

<body>
    <h1> Pagina 2 </h1>

    <?php
    //Acessa o valor dos cookies usando essa variavel super global
    $nome = $_COOKIE["nome"];
    $can  = $_COOKIE["caneta"];

    ?>
    <!--Apresenta  o valor do cookies-->
    <p> Nome: <?= $nome ?> </p>
    <p> Caneta: <?= $can ?> </p>
    <p><a href="cookies3.php">Proxima pagina </a></p>

</body>

</html>