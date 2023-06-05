<?php 
    include_once('./config.php');
 if(!empty($_GET['id'])){
        $id = $_GET['id'];
        $selectSQL= "SELECT * FROM cliente WHERE id=$id";
        $result = $pdo->query($selectSQL);
        
        if($result->rowCount() > 0){
           $sqlDelete = "DELETE FROM cliente WHERE id=$id";
           $result = $pdo->query($sqlDelete);

        }
        
    }
    header('location: sistema.php');

?>