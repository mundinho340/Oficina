<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php
     session_start();
        require_once("./config.php");
         if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: signin.php');
    }
    $email =$_SESSION['email'];
          $cmd =$pdo ->prepare("select * from produto join cliente on cliente.nome = produto.nome_propretario;");
          $cmd->execute();
        // $dados = $cmd -> fetchAll(PDO::FETCH_ASSOC);
    ?>
    <div  class="m-50">
        <table  class="table text-black table-bg">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">nome</th>
                    <th scope="col">data </th>
                    <th scope="col">tipo de avaria</th>
                    <th scope="col">proprietario </th>

                    <th scope="col">id</th>
                    <th scope="col">nome</th>
                    <th scope="col">nome completo</th>
                    <th scope="col">email</th>
                    <th scope="col">senha</th>
                    <th scope="col">contacto</th>
                </tr>
            </thead>
            <tbody>
    <?php

                        while($user_data = $cmd->fetch(PDO::FETCH_ASSOC)){
                        echo "<tr>";
                        echo "<td>".$user_data['id']."</td>";
                        echo "<td>".$user_data['nome']."</td>";
                        echo "<td>".$user_data['data']."</td>";
                        echo "<td>".$user_data['Tipo_avaria']."</td>";
                        echo "<td>".$user_data['nome_propretario']."</td>";
                        echo "<td>".$user_data['id']."</td>";
                        echo "<td>".$user_data['nome']."</td>";
                        echo "<td>".$user_data['nome_completo']."</td>";
                        echo "<td>".$user_data['email']."</td>";
                        echo "<td>".$user_data['senha']."</td>";
                        echo "<td>".$user_data['contacto']."</td>";
                        echo "<td><a class='btn btn-success'>editar</a></td>";
                        echo "<td><a 'btn btn-red'>apagar</a></td>";
                        echo "<br>";
                    }
                ?>
            </tbody>
        </table>
</body>
</html>