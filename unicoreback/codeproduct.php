<?php
session_start();
require('includes/conexao.php');


if(isset($_POST['cadastrarprodutos'])){
$product = $_POST['produto'];
$type = $_POST['tipo'];
$origina = $_POST['origina'];

$query = mysqli_query($con, "INSERT INTO product (nome, tipo, locals) VALUES ('$product','$type', '$origina')");
echo $query;
}

if($query)
        {
             //echo "Saved";
            $_SESSION['sucess'] = "s";
            header('Location: product.php');
            echo "Adiconado com sucesso a tabela";
        }
        else 
        {
          $_SESSION['status'] = "n";
            echo mysqli_error($con);
            //header('Location: cadastros_empresa.php');  
            echo "Falha ao adiconar a tabela!";
       }
        ?>   

