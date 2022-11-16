<?php
session_start();
require('includes/conexao.php');


if(isset($_POST['registerDuplic'])){
    $clientdupli = $_POST['clientDupli'];
    $inclusaoDupli = $_POST['includupli'];
    $venceDuplic = $_POST['vencduplic'];
    $nfedupli = $_POST['nfedupli'];
    $valorDuplic = $_POST['valordupli'];

$query = mysqli_query($con, "INSERT INTO duplicatas (bankclient, dateDuplic, vencDuplic, nfeduplic, valorduplic ) VALUES ('$clientdupli', '$inclusaoDupli', '$venceDuplic', '$nfedupli', '$valorDuplic')");
echo $query;
}

if($query)
        {
             //echo "Saved";
            $_SESSION['sucess'] = "s";
            header('Location: duplicatas.php');
            //echo "Adiconado com sucesso a tabela";
        }
        else 
        {
          $_SESSION['status'] = "n";
            echo mysqli_error($con);
            header('Location: duplicatas.php'); 
            //echo "Falha ao adiconar a tabela!";
       }
        ?>   


