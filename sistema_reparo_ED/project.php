<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        try{
            $pdo = new PDO("mysql:dbname=itc_2023;host:localhost", "root", "");  
    }catch(PDOException $e){
            echo "Erro com base de dados ".$e -> getMessage();
        }
        catch(PDOException $e){
            echo "Erro geral".$e -> getMessage();
        }
        // inserir dados na base de dados 

        // $cmd =$pdo -> prepare("insert into alunos(nome, email, contacto) values(:n, :e, :c)");
        // $cmd -> bindValue(":n", "gerson");
        // $cmd -> bindValue(":e", "gerson@gmail");
        // $cmd -> bindValue(":c", "845916612");

        //visualizacao da db
    
        $cmd =$pdo -> query("select * from alunos;");
        $dados = $cmd -> fetchAll(PDO::FETCH_ASSOC);
        echo "<pre>" ;
        print_r($dados);       
        // $cmd -> execute();
        echo "</pre>" ;

        echo "usuario autenticado";
       
?>

</body>
</html>