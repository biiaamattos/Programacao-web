<?php 
    @$u = $_POST["usuario"];
    @$s = $_POST["senha"];
    
    if($u == "zezinho" && $s == "123"){
        //pode acessar
        session_start();
        $_SESSION["usuario"] = $u;
        $_SESSION["senha"] = md5($s);
        
        header("Location: principal.php");
    }
    else{
        //não pode acessar
        echo "<h1>Você não pode acessar</h1>";
        die();
    }
