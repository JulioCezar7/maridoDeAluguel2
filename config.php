<?php

    $dbHost = 'localhost';
    $dbUsername ='root';
    $dbPassword= 'admin';
    $dbName = 'cadastro';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

   /*if ($conexao->connect_error) 
    {
        echo "erro";
    }
    else
    {
        echo"Conexão efetuada com sucesso";
    }*/
?>