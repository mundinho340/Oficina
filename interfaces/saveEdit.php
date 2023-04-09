<?php
    include_once('../controller/config.php');

    if(isset($_POST['update'])){
        $nome = $_POST["nome"];
        $email =$_POST["email"];
        $telefone =$_POST["telefone"];
        $sexo =$_POST["genero"];
        $senha= $_POST["senha"];
        $data_nasc = $_POST['data_nascimento'];
        $cidade= $_POST["cidade"];
        $estado =$_POST["estado"];

        $sqlUpdate = "UPDATE utilizadorr SET nome='$nome',telefone='$telefone', email='$email',sexo='$sexo', date_nasc='$data_nasc', cidade='$cidade', estado='$estado', senha='$senha' WHERE id='$id'";

        $result = $conexao->query($sqlUpdate);
    }

    header('location: sistema.php');
?>