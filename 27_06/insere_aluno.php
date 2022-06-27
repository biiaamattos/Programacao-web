<?php

  //Obter valores 
    $nome = $_POST["nome"];
    $data = $_POST["data"];
    $cidade = $_POST["cidade"];


    //conexão com banco de dados
    $con = new mysqli("localhost", "root","", "vinicio");

    //criar String com o comando SQL
    $sql = "INSERT INTO alunos VALUES
    (null, '$nome', '$data', '$cidade')";

    //executar código sql no banco de dados
    $result = $con->query($sql);
    

  
    //verificando se ao menos uma linha foi modificada no BD
    if ($con->affected_rows) {
        echo " <p>Registro inserido com Sucesso</p>";
    }
    else {
        echo  " <p>Nenhum registro inserido com Sucesso</p>";
    }
