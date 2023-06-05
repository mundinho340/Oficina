
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>


<body>
    <?php
        include_once('./config.php');
        if(isset($_POST['submit'])){
            if(!empty($_GET['id'])){
                $id = $_GET['id'];
                $selectSQL= "SELECT * FROM cliente WHERE id=$id";
                $result = $pdo->query($selectSQL);
                
                if($result->rowCount() > 0){
                    while($user_data =$result->fetch(PDO::FETCH_ASSOC)){
                        $nome = $user_data['nome'];
                        $nomeCompleto = $user_data['nome_completo'];
                        $email = $user_data['email'];
                        $senha =$user_data['senha'];
                        $contacto = $user_data['contacto'];
                        echo "nome -> $nome email -> $email senha -> $senha telefone -> $telefone sexo -> $sexo data -> $data_nasc cidade -> $cidade estado -> $estado endereco -> $endereco";
                    }
                    print_r("nome : $nome");
    
                    }else{
                        header('location: sistema.php');
                    }
            }else {
                header('location: sistema.php');
            }

        }
    ?>
     <form action="editar.php" method="post" id="container" style="width:500px; height:600px; margin:auto; margin-top:15%;">
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
        <button type="submit" class="btn btn-success" style="marign:auto;" name="update">Cadastrar</button>
        <button type="submit" class="btn btn-success" style="marign:auto;">limpar</button>

     </form>
     
</body>
</html>