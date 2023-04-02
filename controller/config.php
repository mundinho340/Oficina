
<?php


    $dbHost ="localhost";
    $dbUsername="root";
    $dbPassword="";

    $dbName="usuarios";

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    // if($conexao->connect_errno)
    //     {
    //         echo "Erro ao conectar com o server";
    //     }else{
    //         echo "Conexao efetuada com sucesso";
    // }
?>