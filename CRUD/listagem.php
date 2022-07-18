<?php
include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem</title>
</head>

<body>
    <h1>Listagem de dados do(s) usuário(s)</h1>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>Email</th>
            <th>Senha</th>
            <th colspan="2">Ação</th>
        </tr>

        <?php
        $sql = "SELECT * FROM usuarios ORDER BY nome;";

        $result = $con->query($sql);
        if ($result->num_rows) {
            while ($dados = $result->fetch_assoc()) {
        ?>

                <tr>
                    <td><?= $id = $dados["id"] ?></td>
                    <td><?= $dados["nome"] ?></td>
                    <td><?= $dados["sobrenome"] ?></td>
                    <td><?= $dados["email"] ?></td>
                    <td><?= $dados["senha"] ?></td>
                    <td><a href="alteracao.php?id=$id">Alterar</a></td>
                    <td><a href="excluir.php?id=$id">Excluir</a></td>
                </tr>
    </table>
        <?php
            }
        }else{
            echo "<p style = 'color: red;'>Nenhum registro encontrado no banco</p>";
        }
        ?>
<button onclick="window.location.replace('index.html')">Voltar para página</button>
</body>

</html>