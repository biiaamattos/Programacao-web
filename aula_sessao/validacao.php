<?php 
    session_start();
    if(!isset($_SESSION["usuario"]) ||
        !isset($_SESSION["senha"])){
        //erro, não pode acessar a página
        echo "<p>Faça Login primeiro</p>";
        die();
    }
