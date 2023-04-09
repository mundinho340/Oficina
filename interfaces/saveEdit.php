<?php
    include_once('../controller/config.php');

    if($_POST['update']){
        $nome = $_POST["nome"];
        $email =$_POST["email"];
        $telefone =$_POST["telefone"];
        $sexo =$_POST["genero"];
        $senha= $_POST["senha"];
        $data_nasc = $_POST['data_nascimento'];
        $cidade= $_POST["cidade"];
        $estado =$_POST["estado"];
    }
?>