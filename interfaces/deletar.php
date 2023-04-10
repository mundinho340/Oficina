<script>
    funcao1()
    function funcao1(){
    var x;
    var r=confirm("Escolha um valor!");
    if (r==true)
        {
            <?php echo "oal";?>
        x="você pressionou OK!";
        }
    else
        {
        x="Você pressionou Cancelar!";
        }
    document.getElementById("demo").innerHTML=x;
    }
</script>
<?php 
//     include_once('../controller/config.php');
//  if(!empty($_GET['id'])){
//         $id = $_GET['id'];
//         $selectSQL= "SELECT * FROM utilizadorr WHERE id=$id";
//         $result = $conexao->query($selectSQL);
        
//         if($result->num_rows > 0){
//            $sqlDelete = "DELETE FROM utilizadorr WHERE id=$id";
//            $result = $conexao->query($sqlDelete);

//         }
        
//     }
//     header('location: sistema.php');
?>