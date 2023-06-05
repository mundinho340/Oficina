<?php
    try{
        $pdo = new PDO("mysql:dbname=usuarios; host:localhost", "root","");
    }catch(PDOException $e){
        echo "Error com base de dados ".$e -> getMessage();
    }

    echo "conectado com sucesso";


?>