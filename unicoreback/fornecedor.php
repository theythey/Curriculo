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
    <li class="breadcrumb-item active" aria-current="page" style="color: #0e4277; !important">Fornecedores</li>
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
      <form action="codecadastros.php" method="POST">

        <div class="modal-body">

            <div class="form-group" style="padding: 10px;!important">
                <label> Nome Completo* </label>
                <input type="text" name="razao" class="form-control" placeholder="Digite o Nome ou razão Social do Fornecedor...">
            </div>
            <div class="form-group" style="padding: 10px;!important">
                <label> CPF* </label>
                <input type="text" name="cnpj" class="form-control" placeholder="Digite o CPF ou CNPJ do Fornecedor...">
            </div>
              <div class="form-group" style="padding: 10px;!important">
                <label> Conta Bancaria* </label>
                <input type="text" name="cnpj" class="form-control" placeholder="Digite o CPF ou CNPJ do Fornecedor...">
            </div>
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Abortar</button>
            <button  name="cadastrarempresa" class="btn btn-primary">Incluir</button>
            <div class="modal-footer">
        </div>
      </form>
      </div>
  </div>
</div>
</div>
<div class="card-body">
  <table class="table">
 
  </tbody>
</table>
  </div>
</div>
</div>
</div>



