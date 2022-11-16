<?php
include('includes/conexao.php');


$conexao = include('includes/conexao.php');

$name= mysqli_real_escape_string($conexao, trim($_POST['nome']));
$password= mysqli_real_escape_string($conexao, trim(md5($_POST['password'])));

$sql = "select count(*) as total from usuario = '$name'";
$result = mysqli_query($sql);

if($row['total'] == 1) {
    $_SESSION['Usuario Existe'] = true;
    header('location: home.php');
    exit;
}

//$sql = "INSERT"
?>