<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>     
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
            <a class="navbar-brand" href="#">Krython</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Moedas</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Socios
            </a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled">Sair</a>
        </li>
                </ul>
                <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                </form>
            </div>
            </div>
        </nav>
    </header>
    <section>
        <article id="side" class="side">
            <h1>Seja bem-vindo</h1>
            <p>Nos garantimos os melhores serviços </p>
        </article>
        <article>
            <h1>Hello guys {:}</h1>
            <p>Faça o seu cadastro aqui</p>
            <form action="projectE.php" method="post" class="mb-3 row">
                <label for="nome">Nome</label>
                <input type="text" name="nome" >
                <br>
                <label for="email">email</label>
                <input type="email" name="email" id="">
                <br>
                <label for="">contacto</label>
                <input type="text" name="contacto">
                <br>
                <button  class="btn btn-success">adicionar</button>
            </form>
        </article>
    </section>
    

<footer>
    Krypthon
</footer>
    <?php
        try{
            $n= $_POST["nome"];
            $e =$_POST["email"];
            $c =$_POST["contacto"];
            // header('location: project.php');
            $pdo = new PDO("mysql:dbname=itc_2023;host:localhost", "root", "");  
    }catch(PDOException $e){
            echo "Erro com base de dados ".$e -> getMessage();
        }
        catch(PDOException $e){
            echo "Erro geral".$e -> getMessage();
        }
        // inserir dados na base de dados 

        $cmd =$pdo -> prepare("insert into alunos(nome, email, contacto) values(:n, :e, :c)");
        $cmd -> bindValue(":n", $n);
        $cmd -> bindValue(":e", $e);
        $cmd -> bindValue(":c", $c);
        $cmd -> execute();
        //visualizacao da db
        // $cmd =$pdo -> query("select * from alunos;");
        // $dados = $cmd -> fetchAll(PDO::FETCH_ASSOC);
        // echo "<pre>" ;
        // print_r($dados);       
        // echo "</pre>" ;

        // echo "usuario autenticado";
       
?>
<div class="card">
  <h5 class="card-header">krypthon </h5>
  <div class="card-body">
    <h5 class="card-title">criado por Krypthon</h5>
    <p class="card-text">ddd-9 ddd-0.</p>
    <a href="#" class="btn btn-primary">Saber mais</a>
  </div>
</div>
</body>
</html>