<?php
include_once("conexao");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar</title>
</head>

<body>
    <h1>Alteração de dados</h1>
    <?php
    $id = $_GET["id"];
    $sql = "SELECT * FROM usuarios WHERE id=$id";

    $result = $con->query($sql);
    if (!$result->num_rows) {
        $dados = $result->fetch_assoc();
    ?>
        <form action="alterar.php" method="POST">
            <input type="hidden" name="id" id="id">
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome" placeholder="Seu nome" value="<?= $dados["nome"] ?>"><br><br>

            <label for="sobrenome">Sobrenome: </label>
            <input type="text" name="sobrenome" id="sobrenome" placeholder="Seu sobrenome" value="<?= $dados["sobrenome"] ?>"><br><br>

            <label for="email">Email: </label>
            <input type="email" name="email" id="email" placeholder="Seu melhor email" value="<?= $dados["email"] ?>"><br><br>

            <label for="senha">Senha: </label>
            <input type="password" name="senha" id="senha" value="<?= $dados["senha"] ?>"><br><br>

            <label for="confirmar_senha">Confirmar senha: </label>
            <input type="password" name="confirmar_senha" id="confirmar_senha" value="<?= $dados["confirmar_senha"] ?>"><br><br>

            <input type="submit" name="alterar" id="alterar" value="Alterar dados">
        </form>
    <?php
    } else {
        echo "<p style = 'color: red;'>Nenhum registro encontrado no banco</p>";
    }
    ?>
</body>

</html>