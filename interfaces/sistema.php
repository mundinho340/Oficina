<?php
    session_start();
    print_r($_SESSION);

    if(!isset($_SESSION['email']) == true && !isset($_SESSION['senha']) == true){
        header('location: login.php');
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
    }

    $logado = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>
</head>
<body>
    <h1>Bem vindo ao sistema</h1>
</body>
</html>