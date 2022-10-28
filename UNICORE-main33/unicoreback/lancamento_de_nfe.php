<?php
session_start();
include('includes/conexao.php');
include('includes/html.php');
include('includes/header.php');
?>
<div class="MENU" style=" margin-top: 30px; margin-left: 20%;">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active"  aria-current="page">Visão Geral</li>
    <li class="breadcrumb-item active" aria-current="page">Financeiro</li>
    <li class="breadcrumb-item active" aria-current="page">Data</li>
  </ol>
  </div>
       
<main style="margin-top:-1rem; margin-left: 18%;">
<div class="card" style="width: 80%;">
        <h1 style="font-size:25px; margin:20px; margin-left: 20px;"> Notas Fiscais / Saída</h1>
        <select class="form-select form-select-sm" aria-label=".form-select-sm example" style="width: 30%; margin-left: 2%;">
  <option selected>Selecionar empresa...</option>
  <option value="1"></option>
  <option value="2"></option>
  <option value="3"></option>
</select>
        <div class="btn-group btn-group-sm" role="group" aria-label="Small button group" style="width: 10px; margin-top: 10px; margin-left: 2%; ">
  <button type="button" class="btn btn-outline-dark" style="border-radius: 3px; !important" >Todos</button>
  <button type="button" class="btn btn-outline-dark" style="border-radius: 1px; !important">Saídas</button>
  <button type="button" class="btn btn-outline-dark" style="border-radius: 3px; !important">Entradas</button>
</div>
            <table class=" table table-striped table-hover  " style="width: 99%; margin-top: 30px; margin-left: 5px;">
                        <thead>
                            <tr style="background:#E9E9E9;
    font-weight: 700;
    font-style: normal;
    font-size: 15px;">
                            <th scope="col">Remetente </th>
                            <th scope="col">Destinatario </th>
                            <th scope="col">Chave de Acesso </th>
                            <th scope="col">Número NF-E </th>
                            <th scope="col">Valor </th>
                            <th ></th>

                            </tr>
                        </thead>
                        <tbody class="table-group-divider"
                        >
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td ></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                        </tbody>
                        </table>

</div>
</div>                        
</main>
</body>

</html> 