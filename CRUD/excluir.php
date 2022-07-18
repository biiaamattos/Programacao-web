<?php
include_once("conexao.php");

$id = $_GET["id"];

$sql = "SELECT * FROM usuarios WHERE id=$id";

$result = $con->query($sql);
if($result->num_rows){
    $sql = "DELETE FROM usuarios WHERE id=$id";

    echo "<p style = 'color: green;'>Excluido com sucesso</p>";
}else{
    echo "<p style = 'color: red;'>Nenhum registro encontrado/p>";
}
?>