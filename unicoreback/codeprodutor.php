<?php
session_start();


//$con = mysqli_connect("localhost","root","","unicore");
require('includes/conexao.php');

if(isset($_POST['cadastrarprodutor'])){



    $query = mysqli_query($con, "INSERT INTO fluxodecheque (destino, data, vencimento, conta, numero, valor, compensado, obeservacao) VALUE ('$destino', '$inclusao', '$compesado', '$conta', '$numerocheque', '$valor', '$compesasao', '$observacao')");
    echo $query;

}
                if($query)
                {
                    // echo "Saved";
                    $_SESSION['sucess'] = "s";
                    header('Location: fluxo_de_cheque.php');
                }
                else 
                {
                    $_SESSION['status'] = "n";
                    echo mysqli_error($con);
                    header('Location: fluxo_de_cheque.php');  
                }


?>