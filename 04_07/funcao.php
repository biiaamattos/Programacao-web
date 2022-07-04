<?php

function buscarCEP($cep){

    //substitui o "-" do cep que pode ser informado pelo usuário para a utilização do mesmo na API

    $cep= str_replace("-", "", $cep);

    //pega o conteúdo retornado pela API em formato .json $api = file_get_contents("http:// viacep.com.br/ws/$cep/json/");
    $api = file_get_contents("http://viacep.com.br/ws/$cep/json/");

    //transforma o conteúdo pego pela variavel $api em um formato .json, deixando mais adequado para o uso
    $json = json_encode($api);
    
}