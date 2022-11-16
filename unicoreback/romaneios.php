<?php
session_start();
include('includes/conexao.php');
include('includes/header.php');
include('includes/html.php');

date_default_timezone_set('America/Sao_Paulo');
$dataLocal = date('Y-m-d', time());
?>

<div class="MENU" style=" margin-top: 15px; margin-left: 20%;  ">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active"  aria-current="page" style="color: #0e4277; !important"><a href="home.php">Visão Geral</a></li>
    <li class="breadcrumb-item active" aria-current="page" style="color: #0e4277; !important">Financeiro</li>
    <li class="breadcrumb-item active" aria-current="page" style="color: #0e4277; !important">Movimentações</li>
    <li class="breadcrumb-item active" aria-current="page" style="color: #0e4277; !important">Romaneios</li>

  </ol>
  </div>  

  <div class="card" style="width:55%; left:20%; border-radius:0px; margin-top:80px;" > 
  <div class="card-header">
    <h1 style="margin-top: 10;font-size: 25px;">Produtor/fornecedor</h1>
    <H1 style="margin-top: -40px;font-size: 25px; " align="right">8488</H1>
  </div>
  <span class="material-symbols-outlined"style="margin-left: 700px; margin-top: 1px;" >info</span>
  <div class="card-body" style="margin-top:-50px;">
    <p class="card-text"  align="middle">Placa:</p>
    <p class="card-text" style="margin-top: -38px;">Fornecedor:</p>
    <p class="card-text"  align="middle">Quantidade:</p>
    <p class="card-text"style="margin-top: -38px;">produto:</p>
        <p class="card-text"  align="middle">Valor:</p>
    <p class="card-text"style="margin-top: -38px;">comissão:</p>

  </div>
</div>