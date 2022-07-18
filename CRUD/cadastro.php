<?php
include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuário</title>
</head>

<body>
    <h1>Cadastro de usuário</h1>

    <?php
    //Cria-se aqui um array nomeado comos dados informados pelo usuário
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    //Verificar se o botão foi apertado. Literalmente, se ele não está "vazio"
    if (!empty($dados["cadastro"])) {
        $input_vazio = false;

        //Retira todos os espaços anteriores e posteriores a uma String
        $dados = array_map('trim', $dados);

        //Se no array $dados existir valores vazios, então executará
        if (in_array("", $dados)) {
            $input_vazio = true;
            echo "<p style = 'color: red;'>É necessário preencher os campos antes de realizar o cadastro!</p>";
        }
        //Se o email inserido não for válido, então executará
        elseif (!filter_var($dados["email"], FILTER_VALIDATE_EMAIL)) {
            $input_vazio = true;
            echo "<p style = 'color: red;'>Por favor, insira um email válido!</p>";
        }
        
        //Se a confirmação da senha for igual a senha, então realize o que está a seguir
        if ($dados["confirmar_senha"] == $dados["senha"]) {
            //Comando para inserir os dados no banco
            $sql = "INSERT INTO usuarios(nome, sobrenome, email, senha, confirmacao_senha) 
                VALUES('" . $dados["nome"] . "', '" . $dados["sobrenome"] . "', '" . $dados["email"] . "', 
                " . $dados["senha"] . ", " . $dados["confirmar_senha"] . ");";

            //Comandos para cadastrar no banco e confirmar o cadastro
            $result = $con->query($sql);
            if ($result) {
                echo "<p style = 'color: green;'>Cadastrado com sucesso :)</p>";
                unset($dados);
    ?>
                <button onclick="window.location.replace('index.html')">Voltar para o ínicio</button>
    <?php
            } else {
                echo "<p style = 'color: red;'>Não foi possível cadastrar :(</p>";
            }
        } else {
            echo "<p style = 'color: red;'>Senha não coincidente</p>";
        }
    }
    ?>

    <form action="" method="post">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome" placeholder="Seu nome" value="<?php
                                                                                if (isset($dados["nome"])) {
                                                                                    echo $dados["nome"];
                                                                                }
                                                                                ?>"><br><br>

        <label for="sobrenome">Sobrenome: </label>
        <input type="text" name="sobrenome" id="sobrenome" placeholder="Seu sobrenome" value="<?php
                                                                                                if (isset($dados["sobrenome"])) {
                                                                                                    echo $dados["sobrenome"];
                                                                                                }
                                                                                                ?>"><br><br>

        <label for="email">Email: </label>
        <input type="email" name="email" id="email" placeholder="Informe seu melhor email" value="<?php
                                                                                                    if (isset($dados["email"])) {
                                                                                                        echo $dados["email"];
                                                                                                    }
                                                                                                    ?>"><br><br>

        <label for="senha">Senha: </label>
        <input type="password" name="senha" id="senha" placeholder="Sua senha"><br><br>

        <label for="confirmar_senha">Confirmar senha: </label>
        <input type="password" name="confirmar_senha" id="confirmar_senha" placeholder="Confirme sua senha"><br><br>

        <input type="submit" name="cadastro" id="cadastro" value="Realizar cadastro">
    </form>

</body>

</html>