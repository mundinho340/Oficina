<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            
        }
        header{
            display:flex;
            justify-content: space-between !important;
            width:1250px;
        }

        nav{
            width:700px;
            display:flex;
            justify-content: space-between !important;
        }

    </style>
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
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
          $cmd =$pdo ->prepare("select * from cliente;");
          $cmd->execute();
          if(!empty($_GET['search']))
        {
            $data = $_GET['search'];
            $sql = "SELECT * FROM cliente WHERE id LIKE '%$data%' or nome LIKE '%$data%' or email LIKE '%$data%' ORDER BY id DESC";
        }
        else
        {
            $sql = "SELECT * FROM cliente ORDER BY id DESC";
        }
    $cmd = $pdo->query($sql);
        // $dados = $cmd -> fetchAll(PDO::FETCH_ASSOC);
    ?>
<body>
    <header style="display:flex;">
        <div type="hidden" class="user">
            <img src="" alt="">
            <?php echo $email;?>
        </div>
        <nav>
            <a href="listar.php" >listar</a>
            <a href="cadastrarP.php">cadastrar aparelho</a>
            <a href='meuAparelho.php?id=[$id]'>visualizar meu aparelho</a>
            <!-- <a href="./pesquisa.php">pesquisar</a> -->
            
            <a href="sair.php"><img src="./img/box-arrow-right.svg" alt="">sair</a>
        </nav>
        
        <!-- <div style="display=flex; ">
            <div><input type="search" placeholder="pesquisar" class="form-control"  name="pesquisar" margin:0px;>
                <img src="./img/search.svg" alt="" style="margin-left:180px; margin-top:-65px;" >
            </div>
                    <button class="btn">pesquisar</button>
        </div> -->
        <div class="box-search" style="display:flex;">
        <input type="search" class="form-control w-100" placeholder="Pesquisar" id="pesquisar">
        <button onclick="searchData()" class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
        </button>
    </div>
        <button onclick="side()" style="width:80px; height:40px; align-items:center; text-align:center; border:none; background:transparent;">
            <div style="margin-left:40px; !important">
                <img style="width:35px;" src="./img/sliders2.svg" alt="">
            </div>

        </button>
    </header>
    
    <div  class="m-50">
        <table  class="table text-black table-bg">
            <thead>
                <tr>
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
                        echo "<td>".$user_data['nome_completo']."</td>";
                        echo "<td>".$user_data['email']."</td>";
                        echo "<td>".$user_data['senha']."</td>";
                        echo "<td>".$user_data['contacto']."</td>";
                        echo "<td><a class='btn btn-success' href='editar.php?id=$user_data[id]'>editar</a></td>";
                        echo "<td><a class='btn btn-danger'; href='apagar.php?id=$user_data[id]'>apagar</a></td>";
                        echo "<br>";
                    }
                ?>
            </tbody>
        </table>
        <input type="hidden" name="id">
    </div>
</body>
<script>
    var search = document.getElementById('pesquisar');

    search.addEventListener("keydown", function(event) {
        if (event.key === "Enter") 
        {
            searchData();
        }
    });

    function searchData()
    {
        window.location = 'sistema.php?search='+search.value;
    }
</script>
</html>