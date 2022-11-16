<?php
require('includes/conexao.php');
include('includes/html.php');
include('includes/header.php');
?>
<div class="MENU" style=" margin-top: 15px; margin-left: 20%;  ">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active"  aria-current="page" style="color: #0e4277; !important"><a href="home.php">Visão Geral</a></li>
    <li class="breadcrumb-item active" aria-current="page" style="color: #0e4277; !important">Financeiro</li>
    <li class="breadcrumb-item active" aria-current="page" style="color: #0e4277; !important">cadastros</li>
    <li class="breadcrumb-item active" aria-current="page" style="color: #0e4277; !important">Empresas Filial</li>
    <nav class="navbar navbar-expand-lg bg-light">
        <button type="button" data-toggle="modal" data-target="#cadastroempresa" class="btn btn-success" style="margin-left: -1REM">Adicionar</button>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


  <div class="modal fade" id="cadastroempresa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top: 1%; border-radius:0px; !IMP ">
  <div class="modal-dialog" role="document">
    <div class="modal-content"style="margin-top: -1rem; border-radius:0px;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style=" font-weight: bold; color:#0e4277;">Cadastros Empresa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="codeprodutor.php" method="POST">

        <div class="modal-body">
        nomeprodutor nascimento plantil
            <div class="form-group" style="padding: 10px;!important">
                <label> Nome*</label>
                <input type="text" name="nomeprodutor" class="form-control" placeholder="Digite um Favorecido...">
            </div>
            <div class="form-group" style="padding: 10px;!important">
                <label>Estado Nacimento*</label>
                <input type="text" name="nascimento" class="form-control">
            </div>
            <div class="form-group" style="padding: 10px;!important">
                <label>Região Plantil*</label>
                <input type="text" name="plantil" class="form-control">
            </div>
            <div class="form-group"style="padding: 10px;!important">
                <label>Produtos*</label>
                <select class="form-select form-select-sm" name="contabanc" aria-label=".form-select-sm example">
                  <option selected>Selecionar uma Conta...</option>
                  <?php
                            $queryempre = "SELECT N.*, E.nomeprodutor FROM produtores As N INNER JOIN product As E ON N.idproduct = E.idproduct;";
                            $query_run = mysqli_query($con, $queryempre);
                      
                            if(mysqli_num_rows($query_run) > 0)
                            {
                                while($row = mysqli_fetch_assoc($query_run))  
                                {
                                  echo  '<option value="'. $row['nome'] . '"/'. $row['idproduct'] . '">' . $row['tipo'] . '/'. $row['locals'] .'</option>';
                                }
                            } 
?>
                </select>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Abortar</button>
            <button  name="cadastrarprodutor" class="btn btn-primary">Incluir</button>
            <div class="modal-footer">
        </div>
      </form>
      </div>
  </div>
</div>
</div>
<div class="card-body">
  <table class="table">
  <?php

$query = "SELECT * FROM produtores";
$query_run = mysqli_query($con, $query);
  ?>
  <thead>
  </thead>
  <tbody><?php
  if(mysqli_num_rows($query_run) > 0)
                        {
                            while($row = mysqli_fetch_assoc($query_run))  
                            {
   
echo'<tr>';
    echo '<div class="card" scope="row" style="width: 50%; margin-top:10px; margin-left:19%; border-radius:0px;">';
    echo '<div class="card-body">';
    echo '<div style="display:flex;">';
    echo '<h5>'. 'Nome' . ':'.  '</h5>';
    echo '<h5 class="card-title" style="margin-left: 5px;" >'. $row['	nomeprodutor'] .'</h5>';
    echo '</div>';
    echo '<div style="display:flex;">';
    echo '<h6 >'. 'CNPJ: ' . '</h6>';
    echo '<h6 class="card-title" style="margin-left: 5px;">'. $row['natalidade'] . '</h6>';
echo '</div>';
    echo '<div style="display:flex;">';
    echo '<h6 class="card-subtitle mb-2 text-muted"> '. 'Contas:' . '</h6>';
    echo '<h6 class="card-subtitle mb-2 text-muted" style="margin-left: 5px;">' . $row['	regiao'] . '</h6>';
echo '</tr>';
  echo '</div>';
echo '</div>';
}
}
?>
  </tbody>
</table>
  </div>
</div>
</div>
</div>



