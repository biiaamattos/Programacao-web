<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>


<body>
    <h1>Cadastro Aluno </h1>
    <form method="POST" action="insere_aluno.php">
        <label for="nome">Nome do Aluno: </label>
        <input type="text" name="nome" id="nome" />
        </br>
        <label for="data">Data de Nascimento: </label>
        <input type="date" name="data" id="data" />
        </br>
        <label for="cidade">Cidade: </label>
        <select name="cidade" id="cidade">
            <?php
            $con = new mysqli("localhost", "root", "", "vinicio");
            $sql = "SELECT codigo_cid, nome_cid, uf_cid FROM cidades ORDER BY nome_cid";

            $result = $con->query($sql);

            while ($linha = $result->fetch_assoc()) {
                echo "<option value = \"{$linha["codigo_cid"]}\">" . $linha["nome_cid"] . " - " . $linha["uf_cid"] . "</option>";
            }
            ?>
        </select></br>
        <input type="submit" value="Cadastrar" />

    </form>
</body>

</html>