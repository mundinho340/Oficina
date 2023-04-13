<?php
    try{
        $conn = new PDO("mysql:host=localhost; dvname=itc_2023", "root","");

        $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "connected";

    }catch(PDOException $e){
        echo "Conecção Falhada: ".$e -> getMessage();
    }

?>