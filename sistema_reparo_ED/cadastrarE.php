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
        require_once('./config.php');

        if(isset($_POST['submit'])){
            $nome = $_POST['nome'];
            $data = $_POST['data'];
            $tipoA = $_POST['tipo_avaria'];
            $nomeP = $_POST['nome_proprietario'];
            echo "nome -> $nomeP data -> $data tipoA -> $tipoA nomeP -> $nomeP 😋";
            $insert =$pdo -> prepare("insert into produto(nome, data, Tipo_avaria, nome_propretario) values(:nome, :data, :tipoA, :nomeP)");
            $insert -> bindValue(":nome", $nome);
            $insert -> bindValue(":data", $data);
            $insert -> bindValue(":tipoA", $tipoA);
            $insert -> bindValue(":nomeP",$nomeP);
            $insert -> execute();
            header("location: signin.php");
        }

    ?>
    <h1>Cadastre o teu equipamento</h1>
     <form action="cadastrarE.php" method="post" id="container" style="width:500px; height:600px; margin:auto; margin-top:10%;">
        <legend>Formulario</legend>
        <fieldset border=1;>
         <div class="mb-3 row">
            <label for="nome" class="col-sm-2 col-form-label">Nome</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nome" name="nome" placeholder="nome">
            </div>
             </div>
             <div class="mb-3 row">
            <label for="data" class="col-sm-2 col-form-label">data</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="data" name="data">
            </div>
             </div>
             <div class="mb-3 row">
            <label for="avaria" class="col-sm-2 col-form-label">Avaria</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="avaria" name="tipo_avaria" placeholder="avaria">
            </div>
        </div>
                <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">nome propretario</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="propretario" name="nome_proprietario">
                </div>
            </div>
            
        <button type="submit" class="btn btn-success" style="marign:auto;" name="submit">Cadastrar</button>
        <button type="submit" class="btn btn-success" style="marign:auto;">limpar</button>

     </fieldset>

     </form>
</body>
</html>