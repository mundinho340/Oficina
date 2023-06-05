<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<?php
    require_once('./config.php');
    if(isset($_POST['submit'])){
        $nome = $_POST['nome'];
        $nomeCompleto = $_POST['nomeCompleto'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $contacto = $_POST['contacto'];
        echo "nome -> $nome nomeC -> $nomeCompleto email -> $email senha -> $senha contacto->$contacto  😋";
        $insert =$pdo -> prepare("insert into cliente(nome,      nome_completo, email, senha, contacto) values(:nome, :nome_completo, :email, :senha, :contacto)");
        $insert -> bindValue(":nome", $nome);
         $insert -> bindValue(":nome_completo", $nomeCompleto);
        $insert -> bindValue(":email", $email);
        $insert -> bindValue(":senha",$senha);
        $insert -> bindVAlue(":contacto", $contacto);
        $insert -> execute();
         header('location: cadastrarE.php');
        // if(!empty($nome) and !empty($nomeCompleto) and !empty($email) and !empty($senha) and !empty($cotacto)){
        //     $insert -> execute();
        //     header('location: cadastrarE.php');
        // }else{
        //     header('location: formulario.php');
        // }
        
    }
?>
<body>
     <form action="formulario.php" method="post" id="container" style="width:500px;background-color:#0d350123; height:500px; border-radius:10px; align-items:center; text-align:center; margin:auto; margin-top:10%;">
         <div class="mb-3 row">
            <label for="nome" class="col-sm-2 col-form-label">Nome</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nome" name="nome" placeholder="nome">
            </div>
            </div>
            <div class="mb-3 row">
                <label for="nome" class="col-sm-2 col-form-label">Nome Completo</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nome" name="nomeCompleto" placeholder="nome completo">
                </div>
            </div>
             <div class="mb-3 row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="nome" name="email" placeholder="email">
                </div>
            </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword" name="senha">
                </div>
            </div>
             <div class="mb-3 row">
            <label for="nome" class="col-sm-2 col-form-label">contacto</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nome" name="contacto" placeholder="contacto">
            </div>
             </div>
        <button type="submit" class="btn btn-success" style="marign:auto;" name="submit">Cadastrar</button>
        <button type="submit" class="btn btn-success" style="marign:auto;">limpar</button>

     </form>
</body>
</html>