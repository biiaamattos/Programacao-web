<?php

//obter os valore do formulário
$nome = $_POST["nome"];
$data = $_POST["data"];
$cidade = $_POST["cidade"];

//conectar com o banco de dados
include_once("conexao.php");

//criar a string com o comando sql
$sql = "INSERT INTO alunos VALUES (null, '$nome', '$data', '$cidade')";

//executar o sql no banco de dados
$result =  $con->query($sql);

//verificar se ao menos uma linha foi modificada no BD
if($con->affected_rows){
    echo "<p>Registro inserido com sucesso!</p>";
}else{
    echo "<p>Nenhum registro. Tente novamente!</p>";
}
