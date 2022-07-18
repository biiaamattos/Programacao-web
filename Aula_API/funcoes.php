<?php

function buscarCEP($cep){
    //substitui o "-" do cep que pode ser informado pelo usuário para a utilização do mesmo na API
    $cep = str_replace("-", "", $cep);

    //pega o conteúdo retornado pela API em formato .json
    $url = file_get_contents("http://viacep.com.br/ws/$cep/json/");

    if(strlen($url)>0)
        return $url;
    else
        return "";
}
