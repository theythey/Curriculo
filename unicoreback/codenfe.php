<?php
session_start();
require('includes/conexao.php');


if(isset($_POST['cadastrarnfe'])){
    $remetente = $_POST['remetente'];
    $emitente = $_POST['emitente'];
    $chave = $_POST['chave'];
    $numeronfe = $_POST['numero'];
    $valor = $_POST['valor'];
    $inclusao = $_POST['inclusao'];

$query = mysqli_query($con, "INSERT INTO notasfiscais (inclusao, Remente,  idemp, chave, numero , valor) VALUES ('$inclusao', '$remetente', '$emitente', '$chave',  '$numeronfe', '$valor')");
echo $query;
}

if($query)
        {
             //echo "Saved";
            $_SESSION['sucess'] = "s";
            header('Location: lancamento_de_nfe.php');
            //echo "Adiconado com sucesso a tabela";
        }
        else 
        {
          $_SESSION['status'] = "n";
            echo mysqli_error($con);
            header('Location: lancamento_de_nfe.php');  
            //echo "Falha ao adiconar a tabela!";
       }
        ?>   


