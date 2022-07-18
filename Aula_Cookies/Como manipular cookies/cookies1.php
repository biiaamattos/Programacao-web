<?php
    //Cria os cookies (OBS: Cookies sempre serem inicializados/criados no ínicio das páginas php, antes de tudo)
    setcookie("nome", "Luan");
    setcookie("caneta", "Bic");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usando Cookies</title>
</head>
<body>
    <p>Usando Cookies</p>
    <p><a href="cookies2.php">Próxima Página</a></p>
</body>
</html>