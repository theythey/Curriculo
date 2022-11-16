<?php
session_start();


//$con = mysqli_connect("localhost","root","","unicore");
require('includes/conexao.php');

if(isset($_POST['registrarcheque'])){
    $destino = $_POST['destino'];
    $inclusao = $_POST['datainc'];
    $compesado = $_POST['comp'];
    $conta = $_POST['conta'];
    $numerocheque = $_POST['numeroc'];
    $valor = $_POST['valor'];
    $compesasao = $_POST['compes'];
    $observacao = $_POST['obs'];


    // UPDATE cadastroempresa SET razao = 'NOVO NOME' WHERE cnpj = '0123456789';

    // UPDATE fluxodecheque SET <Nome do Campo> = <valor> (virgula para outros campos) WHERE <controle da tabela> = <identificado>
    // UPDATE fluxodecheque SET compensado = $_POST['compes'] WHERE conta = conta do cadastro AND numerocheque = campo com o número do cheque
    // "UPDATE `fluxodecheque` SET compensado ='" . rtrim($_POST['compes']) . "' WHERE id = ' . $_POST['id'];

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