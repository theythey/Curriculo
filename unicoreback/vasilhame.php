<?php
session_start();
include('includes/conexao.php');
include('includes/html.php');
include('includes/header.php');
?>




<div class="MENU" style=" margin-top: 15px; margin-left: 20%;  ">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active"  aria-current="page" style="color: #0e4277; !important"><a href="home.php">Visão Geral</a></li>
    <li class="breadcrumb-item active" aria-current="page" style="color: #0e4277; !important">Financeiro</li>
    <li class="breadcrumb-item active" aria-current="page" style="color: #0e4277; !important">Vasilhames</li>
    <nav class="navbar navbar-expand-lg bg-light">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style= "color:#0e4277; margin-left: 1050px; margin-top: -3.5rem; !important ">
           Imprimir
          </a>
          <ul class="dropdown-menu"style= "color:#0e4277; margin-left: 1050px; margin-top: -1.2rem; !important ">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
       
</nav>
  </ol>
  </div>


  
<main style="margin-top:-6rem; margin-left: 18%;  ">
<div class="card" style="width: 80%; border-radius: 0px;">
        <h1 style="font-size:25px; margin:20px; margin-left: 20px; font-weight: bold; color:#0e4277;"> Vasilhames / Gerais</h1>
        
<button type="button" class="btn btn-success" style="margin-left:2%; margin-top:-0.5rem; width:18%; padding: -0.8rem;">Adicionar</button>

        <div class="btn-group btn-group-sm" role="group" aria-label="Small button group" style="width: 10px; margin-top: 10px; margin-left: 2%; ">
  <button type="button" class="btn btn-outline-dark" style="border-radius: 3px; !important" >Todos</button>
  <button type="button" class="btn btn-outline-dark" style="border-radius: 1px; !important">Saídas</button>
  <button type="button" class="btn btn-outline-dark" style="border-radius: 3px; !important">Entradas</button>
</div>

<div class="pesquisar"style="margin-top: -2rem;">
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
                            <th scope="col" style="color:#0e4277;">Remetente </th>
                            <th scope="col" style="color:#0e4277;">Destinatario </th>
                            <th scope="col" style="color:#0e4277;">Chave de Acesso </th>
                            <th scope="col" style="color:#0e4277;">Número NF-E </th>
                            <th scope="col" style="color:#0e4277;">Valor </th>
                            <th ></th>

                            </tr>
                        </thead>
                        <tbody class="table-group-divider"
                        >
                            <tr>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>

                        </tbody>
                        </table>
                        

</div>
</div>                        
</main>
<div class="card" style="width: 54.4rem; margin-left: 262px; border-radius:0px; " >
<div class = "vertical " style="border-left: 1px solid black;height: 80px;position:absolute;left: 20%; margin-top:30px;  background: #f5f5f5; "></div>
  <div class="card-body" style=" margin-top: 10px; !important">
  <p class="card-subtitle mb-2 text-muted" style=" margin-left: 55px; font-size: 13px" >Saldos Geral</p>
  <p class="card-subtitle mb-2 text-muted" style="margin-top: px; margin-left: 80px; font-size: 30px; font-weight: bold;">0</p>
  <p class="card-subtitle mb-2 text-muted" style=" margin-left: 55px; font-size: 10px;" >Extrato Diario</p>
</div>

  <div class="card-body" style="margin-left: 18%; margin-top:-7.7rem;">
  <p class="card-subtitle mb-2 text-muted" style=" margin-left: 35px; font-size: 13px " >Saldo total a Pagar</p>
  <p class="card-subtitle mb-2 text-muted" style="margin-top: px; margin-left: 35px; font-size: 30px; font-weight: bold;">R$00,00</p>
  <p class="card-subtitle mb-2 text-muted" style=" margin-left: 55px; font-size: 10px;" >Extrato mensal</p>
</div>

</body>

</html> 