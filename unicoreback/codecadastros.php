<?php
session_start();
require('includes/conexao.php');


if(isset($_POST['cadastrarempresa'])){
    $razao_social = $_POST['razao'];
    $cnpj = $_POST['cnpj'];
    $banco = $_POST['contabanc'];


$query = mysqli_query($con, "INSERT INTO cadastroempresa (razao, cnpj ,contas) VALUE ('$razao_social', '$cnpj', '$banco')");
echo $query;
}

if($query)
{
    // echo "Saved";
    $_SESSION['sucess'] = "s";
    header('Location: cadastros_empresa.php');
}
else 
{
    $_SESSION['status'] = "n";
    echo mysqli_error($con);
    header('Location: cadastros_empresa.php');  

}
?>   

