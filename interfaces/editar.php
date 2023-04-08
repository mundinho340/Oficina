<?php
    // if(isset($_POST['submit'])){
    //     print_r('nome: '.$_POST["nome"]);
    //     print_r('<br>');
    //     print_r('email '.$_POST["email"]);
    //     print_r('<br>');
    //     print_r('telefone '.$_POST["telefone"]);
    //     print_r('<br>');
    //     print_r('sexo: '.$_POST["genero"]);
    //     print_r('<br>');
    //     print_r('cidade '.$_POST["cidade"]);
    //     print_r('<br>');
    //     print_r('estado '.$_POST["estado"]);
    //      print_r('<br>');
    //     print_r('endereço '.$_POST["endereco"]);
      
    // }
    
    if(!empty($_GET['id'])){
        include_once('../controller/config.php');
        $id = $_POST['id'];
        $selectSQL= 'SELECT * FROM utilizadorr id=$id';
        $result = $conexao -> query($selectSQL);
        
        if($result -> num_rows> 0){
            while($user_data = mysqli_fetch_assoc($result)){
                $nome = $_POST["nome"];
                $email =$_POST["email"];
                $telefone =$_POST["telefone"];
                $sexo =$_POST["genero"];
                $senha= $_POST["senha"];
                $data_nasc = $_POST['data_nascimento'];
                $cidade= $_POST["cidade"];
                $estado =$_POST["estado"];
                $endereco=$_POST["endereco"];
                echo "nome -> $nome email -> $email senha -> $senha telefone -> $telefone sexo -> $sexo data -> $data_nasc cidade -> $cidade estado -> $estado endereco -> $endereco";
            }else{
                header('location: sistema.php');
            }

            }
        // $result = mysqli_query($conexao, "insert into utilizadorr(nome, telefone, email, sexo, date_nasc,cidade, estado, senha) values('$nome', '$telefone', '$email', '$sexo','$data_nasc','$cidade', '$estado', '$senha')");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar | GN</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
            width: 400px;
        }
        fieldset{
            border: 3px solid dodgerblue;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right,rgb(0, 80, 172), rgb(80, 19, 195));
        }
    </style>
</head>
<body>
    <a href="./sistema.php">
        <p>Voltar</p>
    </a>
    <div class="box">
        <form action="formulario.php" method="post">
            <fieldset>
                <legend><b>Fórmulário de Clientes</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="password" name="senha" id="password" class="inputUser" required>
                    <label for="senha" class="labelInput">senha</label>
                </div>
                  <br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>