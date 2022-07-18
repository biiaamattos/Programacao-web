<?php
    //Diz que o cookie já está vencido
    setcookie("nome", "", time()-3600);
    setcookie("caneta", "", time()-3600);

    //Apaga o conteúdo dos cookies
    unset($_COOKIE["nome"]);
    unset($_COOKIE["caneta"]);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mais uma Página</title>
</head>
<body>
    <h1>Final</h1>
</body>
</html>