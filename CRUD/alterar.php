<?php
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (!empty($dados["alterar"])) {
    $input_vazio = false;

    $dados = array_map('trim', $dados);

    if (in_array("", $dados)) {
        $input_vazio = true;
        echo "<p style = 'color: red;'>É necessário preencher os campos antes!</p>";
    } elseif (!filter_var($dados["email"], FILTER_VALIDATE_EMAIL)) {
        $input_vazio = true;
        echo "<p style = 'color: red;'>Por favor, insira um email válido!</p>";
    }

    if ($dados["confirmar_senha"] == $dados["senha"]) {

        $sql = "UPDATE usuarios SET nome=" . $dados["nome"] . ", 
                    sobrenome=" . $dados["sobrenome"] . ", email=" . $dados["email"] . ", 
                    senha=" . $dados["senha"] . ", confirmar_senha=" . $dados["confirmar_senha"] . ";";

        $result = $con->query($sql);
        if ($result) {
            echo "<p style = 'color: green;'>Alterado com sucesso :)</p>";
            unset($dados);
        } else {
            echo "<p style = 'color: red;'>Não foi possível alterar :(</p>";
        }
    } else {
        echo "<p style = 'color: red;'>Senha não coincidente</p>";
    }
}
?>