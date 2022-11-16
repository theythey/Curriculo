<?php
session_start();
require('includes/conexao.php');
include('includes/html.php');
include('includes/header.php');

date_default_timezone_set('America/Sao_Paulo');
$dataLocal = date('Y-m-d', time());
?>  



<div class="MENU" style=" margin-top: 15px; margin-left: 20%;  ">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active"  aria-current="page" style="color: #0e4277; !important"><a href="home.php">Visão Geral</a></li>
    <li class="breadcrumb-item active" aria-current="page" style="color: #0e4277; !important">Financeiro</li>
    <li class="breadcrumb-item active" aria-current="page" style="color: #0e4277; !important">Duplicatas</li>
    <nav class="navbar navbar-expand-lg bg-light">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style= "color:#0e4277; margin-left: 750px; margin-top: -3.5rem; !important ">
           Imprimir
          </a>
          
          <ul class="dropdown-menu"style= "color:#0e4277; margin-left: 750px; margin-top: -1.2rem; width: 0%;!important ">
            <l><a class="dropdown-item" href="#" >PDF</a></li>
            <l><a class="dropdown-item" href="#">Excel</a></li>
        </li>
       
</nav>
  </ol>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


  <div class="modal fade" id="LanDuplicatas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top: 1%; border-radius:0px; !IMP ">
  <div class="modal-dialog" role="document">  
    <div class="modal-content"style="margin-top: -1rem; border-radius:0px;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style=" font-weight: bold; color:#0e4277;">Lançamento Duplicatas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="./codeduplicatas.php" method="POST">

        <div class="modal-body">

            <div class="form-group" style="padding: 10px;!important">
                <label> Nome Terceiro</label>
                <input type="text" name="clientDupli" class="form-control" placeholder="Digite o Nome..." required>
            </div>
            <div class="form-group" style="padding: 10px;!important">
                <label> Data de Emissão </label>
                <input type="date" name="includupli" class="form-control" placeholder="Digite o Sobrenome..." required>
            </div>
            <div class="form-group"style="padding: 10px;!important">
                <label> Vencimento </label>
                <input type="date" name="vencduplic" class="form-control checking_email" placeholder="Digite um Email..." required>
            </div>
  
            <div class="form-group" style="padding: 10px;!important">
                <label> Numero NF-E </label>
                <input type="text" name="nfedupli" class="form-control" placeholder="Digite a numeração do Cheque..">
            </div>
            <div class="form-group" style="padding: 10px;!important">
                <label>Valor </label>
                <input type="number" name="valordupli" class="form-control" placeholder="Digite um Valor...">
            </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Abortar</button>
            <button type="submit" name="registerDuplic" class="btn btn-primary">Incluir</button>
        </div>
      </form>

    </div>
  </div>
</div>
</div>

</div>
  
<main style="margin-top:-5rem; margin-left: 18%;  ">
<div class="card" style="width: 80%; border-radius: 0px;">
        <h1 style="font-size:25px; margin:20px; margin-left: 20px; font-weight: bold; color:#0e4277;">Desconto Duplicatas / Boletos</h1>
        <select class="form-select form-select-sm" aria-label=".form-select-sm example" style="width: 30%; margin-left: 2%;">
  <option selected>Selecionar empresa...</option>
  <?php
      $queryempre = "SELECT idemp, razao, cnpj, contas FROM cadastroempresa";
      $query_run = mysqli_query($con, $queryempre);

      if(mysqli_num_rows($query_run) > 0)
      {
          while($row = mysqli_fetch_assoc($query_run))  
          {
            echo  '<option value="'. $row['contas'] . '"/'. $row['idemp'] . '">' . $row['razao'] . '/'. $row['cnpj'] .'</option>';
          }
      }

?>

</select>
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#LanDuplicatas" style="margin-left:34%; margin-top:-2rem; width:18%; padding: -1.8rem;">Adicionar</button>

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
    <?php 
            if(isset($_SESSION['sucess']) && $_SESSION['sucess'] !='') {
              
                if ($_SESSION['sucess'] == 's'){
                  echo '<div class="alert alert-success" role="alert" style="margin-top: 20px; width: 99%; margin-left: 5px; display:flex;">
                  Adicionado com Sucesso!
                  <button  class="btn-close" aria-label="Close" style="margin-left:80%; border:none;"></button>

                </div>';
               }
              
                unset($_SESSION['sucess']);
            }

            if(isset($_POST['Status']) && $_SESSION['Status'] !=''){
                echo '<h2 class="bg-info">'.$_SESSION['Status'].'</h2>';
                unset($_SESSION['Status']);
            }
            ?>  
            <table class=" table table-striped table-hover  " style="width: 99%; margin-top: 30px; margin-left: 5px; ">
            <?php

              $query = "SELECT * FROM duplicatas";
              $query_run = mysqli_query($con, $query);
                ?>            
                <script>
                      function getSelectValue()
                      {
                        var selectedValue = document.getElementById("selEmpresa").value;  
                        console.log(selectedValue);
                      }



</script>
            <thead>
                            <tr style="background:#E9E9E9;
    font-weight: 700;
    font-style: normal;
    font-size: 15px;">
                            <th scope="col" style="color:#0e4277;">Cliente</th>
                            <th scope="col" style="color:#0e4277;">Emissão</th>
                            <th scope="col" style="color:#0e4277;">Vencimento</th>
                            <th scope="col" style="color:#0e4277;">Numero NF-E</th>
                            <th scope="col" style="color:#0e4277;">Valor</th>
                            <th ></th>

                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                        <?php
                          $vlHoje = 0;
                          $vlTotal = 0;
                          if(mysqli_num_rows($query_run) > 0)
                          {
                              while($row = mysqli_fetch_assoc($query_run))  
                              {

                              echo'<tr>';
                                  echo '<td>' . $row['bankclient'] . '</td>';
                                  echo '<td>' . date('d/m/Y', strtotime($row['dateDuplic'])) . '</td>';
                                  echo '<td>' . date('d/m/Y', strtotime($row['vencDuplic'])) . '</td>';
                                  echo '<td>' .  $row['nfeduplic'] .  '</td>';
                                  echo '<td>R$ ' . number_format($row['valorduplic'], 2, ",", ".") . '</td>';
                                  echo '<td></td>';
                              echo'</tr>';

                              if ($row['vencDuplic'] == $dataLocal){
                                $vlHoje += $row['valorduplic'];
                              }

                              $vlTotal += $row['valorduplic'];

                              }  
                            }
                            ?>
                        </tbody>
                        </table>
                        

</div>
</div>         
<div class="card" style=" margin-left:250px; width:80%; border-radius:0; margin:2px; margin-top:1rem; ">

    
<div class="card-body" style=" margin-top: 10px; !important">
    <h5 class="card-subtitle mb-2 text-muted" style=" font-size: 13px;margin-left: 15px;"></h5>
    <h6 class="card-subtitle mb-2 text-muted" style=" font-size: 25px; margin-left: 30px; "><?php echo number_format($vlHoje, 2, ",", ".");?></h6>
    <h5 class="card-subtitle mb-2 text-muted" style=" font-size: 13px;margin-left: 15px; ">Vencendo Hoje(R$)</h5>
    
    <div class="d-flex" style=" margin-top: -55px;margin-left: 140px;height: 50px;">
      <div class="vr"></div>
    </div>
     
    <div class="card2" style="margin-left:180px;margin-top:-3.6rem;">
    <h5 class="card-subtitle mb-2 text-muted" style=" font-size: 13px;margin-left: px;"></h5>
    <h6 class="card-subtitle mb-2 text-muted" style=" font-size: 25px; margin-left: 5px;"><?php echo number_format($vlTotal, 2, ",", ".");?></h6>
    <h5 class="card-subtitle mb-2 text-muted" style=" font-size: 13px;margin-left: -1rem; ">Total Duplicatas(R$)</h5>
    </div>  
</div>
</main>
<script>
  function atualizouSelect()
  {
    const select = document.querySelector('...')  
    const option = select.querySelector('option:selected')

    let value = optionValue.value;
    let text = optionValue.text;

    console.log(value, text);
  }
    // Guardar na sessão o valor da SELECT
    // MAN 
    // Recarregar a página

</script>
</body>

</html> 