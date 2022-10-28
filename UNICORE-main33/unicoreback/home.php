<?php
session_start();
include('includes/conexao.php');
include('includes/html.php');
include('includes/header.php');
?>


<h1 style="font-size: 40px; margin-top: 80px; margin-left: 20%">Visão Geral</h1>
<div class="row" style="width: 56%; margin-top: 50px; margin-left: 20%">

  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
      <button type="button" class="btn-close" aria-label="Close" ></button>
        <h5 class="card-title" style="margin-top: 10px;">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
      <button type="button" class="btn-close" aria-label="Close" ></button>
        <h5 class="card-title">Favorecidos:</h5>
        <p class="card-text" style="font-size: 40px;">R$00,00</p>
        <p style="margin-top: -1.5rem ;">Total de pagamentos a vencer nesta data.</p>
      </div>
    </div>
  </div>
  
</div>

</body>

</html> 