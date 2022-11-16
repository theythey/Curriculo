<?php
session_start();
require('includes/conexao.php');
include('includes/html.php');
include('includes/header.php');
?>




<div class="MENU" style=" margin-top: 15px; margin-left: 20%;  ">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active"  aria-current="page" style="color: #0e4277; !important"><a href="">Visão Geral</a></li>
    <li class="breadcrumb-item active" aria-current="page" style="color: #0e4277; !important">Financeiro</li>
    <li class="breadcrumb-item active" aria-current="page" style="color: #0e4277; !important">Emprestimos</li>
    <nav class="navbar navbar-expand-lg bg-light">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style= "color:#0e4277; margin-left: 1050px; margin-top: -3.5rem; !important ">
           Imprimir
          </a>
          
          <ul class="dropdown-menu"style= "color:#0e4277; margin-left: 1050px; margin-top: -1.2rem; width: 0%;!important ">
            <li><a class="dropdown-item" href="#" >PDF</a></li>
            <li><a class="dropdown-item" href="#">Excel</a></li>
        </li>
       
</nav>
  </ol>
  </div>


  
<main style="margin-top:-5rem; margin-left: 18%;  ">
<div class="card" style="width: 80%; border-radius: 0px;">
        <h1 style="font-size:25px; margin:20px; margin-left: 20px; font-weight: bold; color:#0e4277;">Desconto Duplicatas / Boletos</h1>
        <select class="form-select form-select-sm" aria-label=".form-select-sm example" style="width: 30%; margin-left: 2%;">
  <option selected>Selecionar empresa...</option>
  <option value="1"></option>
  <option value="2"></option>
  <option value="3"></option>
</select>
<button type="button" class="btn btn-success" style="margin-left:34%; margin-top:-2rem; width:18%; padding: -1.8rem;">Adicionar</button>

        <div class="btn-group btn-group-sm" role="group" aria-label="Small button group" style="width: 10px; margin-top: 10px; margin-left: 2%; ">
  <button type="button" class="btn btn-outline-dark" style="border-radius: 3px; !important" >Todos</button>
  <button type="button" class="btn btn-outline-dark" style="border-radius: 1px; !important">Saídas</button>
  <button type="button" class="btn btn-outline-dark" style="border-radius: 3px; !important">Entradas</button>
</div>

<div class="pesquisar"style="margin-top: -2.4rem;">
<form class="form-inline my-2 my-lg-0" style="width: 30%; display:flex; margin-left: 68%;  ">
      <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar" style="border-radius:0px; !importat">
    </form>
    </div>   
            <table class=" table table-striped table-hover  " style="width: 99%; margin-top: 30px; margin-left: 5px; ">
                        <thead>
                            <tr style="background:#E9E9E9;
    font-weight: 700;
    font-style: normal;
    font-size: 15px;">
                            <th scope="col" style="color:#0e4277;">Cliente</th>
                            <th scope="col" style="color:#0e4277;">Inlusão</th>
                            <th scope="col" style="color:#0e4277;">Vencimento</th>
                            <th scope="col" style="color:#0e4277;">Conta Bancaria</th>
                            <th scope="col" style="color:#0e4277;">Número</th>
                            <th scope="col" style="color:#0e4277;">Valor </th>
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
                                <td>R$00,00</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>R$00,00</td>
                                <td></td>
                            </tr>

                        </tbody>
                        </table>
                        

</div>
</div>                        
</main>
<div class="card" style="width: 77.1rem; margin-left: 362px; border-radius:0px; " >
<div class = "vertical " style="border-left: 1px solid black;height: 80px;position:absolute;left: 17%; margin-top:30px; background: rgb(161, 161, 161); "></div>
  <div class="card-body" style=" margin-top: 10px;margin-left: 2%; !important " >
  <p class="card-subtitle mb-2 text-muted" style=" margin-left: 25px; font-size: 13px" >Vencendo Hoje</p>
  <p class="card-subtitle mb-2 text-muted" style="margin-top: px; margin-left: 18px; font-size: 30px; font-weight: bold;">R$00,00</p>
  <p class="card-subtitle mb-2 text-muted" style=" margin-left: 30px; font-size: 10px;" >Extrato Diario</p>
</div>

  <div class="card-body" style="margin-left: 17%; margin-top:-7.7rem;">
  <p class="card-subtitle mb-2 text-muted" style=" margin-left: 20px; font-size: 13px " >A Vencer este mês</p>
  <p class="card-subtitle mb-2 text-muted" style="margin-top: px; margin-left: 18px; font-size: 30px; font-weight: bold;">R$00,00</p>
  <p class="card-subtitle mb-2 text-muted" style=" margin-left: 30px; font-size: 10px;" >Extrato mensal</p>
</div>
<div class = "vertical " style="border-left: 1px solid black;height: 80px;position:absolute;left: 32%; margin-top:30px; background: rgb(161, 161, 161); "></div>
<div class="card-body" style="margin-left: 32%; margin-top:-7.7rem;">
  <p class="card-subtitle mb-2 text-muted" style=" margin-left: 30px; font-size: 13px " >Saldo total</p>
  <p class="card-subtitle mb-2 text-muted" style="margin-top: px; margin-left: 18px; font-size: 30px; font-weight: bold;">R$00,00</p>
  <p class="card-subtitle mb-2 text-muted" style=" margin-left: 30px; font-size: 10px;" >Extrato mensal</p>
</div>
</body>

</html> 