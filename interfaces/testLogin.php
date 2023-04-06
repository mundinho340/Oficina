<?php
    session_start();
    // print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){
        include_once('../controller/config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // print_r("email -> $email senha -> $senha");
        $sql = "SELECT * FROM utilizadorr WHERE email='$email' and senha ='$senha'";
        $result = $conexao  -> query($sql);
        // print_r($result);
        // print_r($sql);
        if(mysqli_num_rows($result) < 1){
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            print_r("Erro usuario nao encontrado");
            header("location: login.php");
        }else{
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
           header('location: sistema.php');
        }
    }
    else{
        header("location: login.php");
    }
?>
