<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Aluno</title>
    <link rel="stylesheet" type="text/css" href="estilos.css" />
</head>

<body>
    <h1>Cadastro de Aluno</h1>
    <form action="insere_aluno.php" method="POST">
        <label for="nome">Nome do aluno: </label>
        <input type="text" name="nome" id="nome" /></br></br>

        <label for="data">Data de Nascimento: </label>
        <input type="date" name="data" id="data" /></br></br>

        <label for="cidade">Cidade: </label>
        <select name="cidade" id="cidade">
            <?php
            include_once("conexao.php");
            $sql = "SELECT codigo_cid, nome_cid, uf_cid FROM cidades ORDER BY nome_cid";

            $result = $con->query($sql);

            while ($linha = $result->fetch_assoc()) {
                echo "<option value = \"{$linha["codigo_cid"]}\">" . $linha["nome_cid"] . " - " . $linha["uf_cid"] . "</option>";
            }
            ?>
        </select></br></br>

        <input type="submit" value="Cadastrar" id="enviar" />
    </form>
</body>

</html>