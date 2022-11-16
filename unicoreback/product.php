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
    <li class="breadcrumb-item active" aria-current="page" style="color: #0e4277; !important">Produtos</li>
    <nav class="navbar navbar-expand-lg bg-light">

        <button type="button" data-toggle="modal" data-target="#cadastrarproduto" class="btn btn-success" style="margin-left: -0.9rem;">Adicionar</button>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


  <div class="modal fade" id="cadastrarproduto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top: 1%; border-radius:0px; !IMP ">
  <div class="modal-dialog" role="document">
    <div class="modal-content"style="margin-top: -1rem; border-radius:0px;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style=" font-weight: bold; color:#0e4277;">Cadastrar Produto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="./codeproduct.php" method="POST">

        <div class="modal-body">

            <div class="form-group" style="padding: 10px;!important">
                <label> Produto </label>
                <input type="text" name="produto" class="form-control" placeholder="Digite um produto..." required>
            </div>
            <div class="form-group" style="padding: 10px;!important">   
                <label> Tipo </label>
                <input type="text" name="tipo" class="form-control" placeholder="Digite o tipo do produto..." >
            </div>
            <div class="form-group" style="padding: 10px;!important">   
                <label> Colheita</label>
                <input type="text" name="origina" class="form-control" placeholder="Digite onde o Produto origina-se..." required>
            </div>
            <div class="form-group"style="padding: 10px;!important">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Abortar</button>
            <button  name="cadastrarprodutos" class="btn btn-primary">Incluir</button>
            
        </div>  
      </form>
      </div>
  </div>
</div>
</div>
<div class="card text-center" style="width: 50%; border-radius:0px; margin-left: 19%;">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active"aria-current="true" href="#">Produtos</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
  <table class="table">
  <?php

$query = "SELECT * FROM product";
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
    echo '<div class="card" scope="row" style="width: 18rem; margin-top:10px;">';
    echo '<div class="card-body">';
    echo '<div style="display:flex;">';
    echo '<h5>'. 'Produto: ' . '</h5>';
    echo '<h5 class="card-title" >'. $row['nome'] .'</h5>';
    echo '</div>';
    echo '<div style="display:flex;">';
    echo '<h6 style="margin-left: ">'. 'Tipo: ' . '</h6>';
    echo '<h6 class="card-title" >'. $row['tipo'] . '</h6>';
echo '</div>';
    echo '<div style="display:flex;">';
    echo '<h6 class="card-subtitle mb-2 text-muted">'. 'Localidade:  ' . '</h6>';
    echo '<h6 class="card-subtitle mb-2 text-muted" >' . $row['locals'] . '</h6>';
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
