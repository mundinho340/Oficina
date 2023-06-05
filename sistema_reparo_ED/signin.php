<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
         <style>
            body{
                text-align:center;
            }
         </style>
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    require_once("./config.php");
    
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){
        include_once('./config.php');
        $email= $_POST["email"];
        $senha= $_POST['senha'];

        $sql = "SELECT * FROM cliente WHERE email='$email' and senha ='$senha'";
        $result=$pdo -> query($sql);
        if($result ->rowCount()< 1){
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
           print_r("Erro usuario nao encontrado");
           header("location: signin.php");
        }else{
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
           header('location: sistema.php');

        }
    }

?><header>
    <a href="./formulario.php">sair</a>
</header>
    <form action="signin.php" method="post" id="container" style="width:500px;background-color:#0d350123; height:400px; border-radius:10px; align-items:center; text-align:center; margin:auto; margin-top:10%;">
        <legend style="text-align:center; margin:bottom:10px;">Login</legend>
        <fieldset border=1; style="text-align:center;">
            <img src="./img/person-circle.svg" alt="" style="; margin-bottom:20px; width:50px; height:50px;text-align:center;">
         <div class="mb-3 row">
            <label for="nome" class="col-sm-2 col-form-label"></label>
            <br>
            <div class="col0-sm-1">
                <input type="email" class="form-control" id="nome" name="email" placeholder="email" style="margin-left:50px; width:400px;">
            </div>
        </div>

        <div class="mb-3 row">
        <label for="nome" class="col-sm-2 col-form-label"></label>
        <br>
        <div class="colp-sm-1">
            <input type="password" class="form-control" id="nome" name="senha" placeholder="senha" style="margin-left:50px; width:400px;">
        </div>
        </div>
            
        <section id="botoes" style="margin-left:30px;">
            <button type="submit" class="btn btn-success" style="marign:auto;" name="submit">iniciar sessao</button>
            <!-- <button type="submit" class="btn btn-success" style="marign:auto;">limpar</button> -->
        </section>

     </fieldset>

     <a href="">
         <p style="margin-top:20px;">forgot password?</p>
     </a>
     </form>
</body>
</html>