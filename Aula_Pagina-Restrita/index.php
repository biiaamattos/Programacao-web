<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Vendas</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Faça seu Login</h1>
        </div>

        <form action="acesso.php" method="post" id="form">
            <div class="control">
                <label for="username">Usuário: </label>
                <input type="text" name="login" id="username">
            </div>

            <div class="control">
                <label for="password">Senha: </label>
                <input type="password" name="senha" id="password">
            </div>

            <input type="submit" id="button" value="Acessar">
        </form>
    </div>
</body>

</html>