<?php
//cria os cookies (OBS: cokkies sempre serem inicializados/criados no inicio das paginas php, antes de tudo)
    setcookie("nome" , "Beatriz");
    setcookie("caneta", "Bic");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usando Cookies</title>
</head>
<body>
    <p> Usando Cookies </p>
    <p> Esta pagina tem Cookies! verifique.</p>
    <p><a href="cookies2.php" >Proxima pagina </a></p>

</body>
</html>