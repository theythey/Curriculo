<?php
session_start();
require('includes/conexao.php');
include('includes/html.php');
include('includes/header.php');

date_default_timezone_set('America/Sao_Paulo');
$dataLocal = date('Y-m-d', time());
?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


  <div class="modal fade" id="cadastronfe" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top: 1%; border-radius:0px; !IMP ">
  <div class="modal-dialog" role="document">
    <div class="modal-content"style="margin-top: -1rem; border-radius:0px;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style=" font-weight: bold; color:#0e4277;">Cadastros Empresa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="codenfe.php" method="POST">

        <div class="modal-body">

            <div class="form-group" style="padding: 10px;!important">
                <label> Emitente </label>
                <input type="text" name="remetente" class="form-control" placeholder="Digite um Favorecido..." required>
            </div>
            <div class="form-group"style="padding: 10px;!important">
                <label>Remetente*</label>
                <select class="form-select form-select-sm" name="emitente" aria-label=".form-select-sm example" >
                  <option selected required>Selecionar uma Conta...</option >

                  <?php
                        $queryempre = "SELECT idemp, razao, cnpj, contas FROM cadastroempresa";
                        $query_run = mysqli_query($con, $queryempre);
                  
                        if(mysqli_num_rows($query_run) > 0)
                        {
                            while($row = mysqli_fetch_assoc($query_run))  
                            {
                              echo  '<option value="'. $row['idemp'] . '">' . $row['razao'] . '</option>';
                            }
                        }  

?>

                </select>
            </div>
            <div class="form-group" style="padding: 10px;!important" >
                <label> Chave acesso* </label>
                <input type="text" name="chave" class="form-control"required>
            </div>
            <div class="form-group" style="padding: 10px;!important">
                <label> Número* </label>
                <input type="text" name="numero" class="form-control" required>
            </div>
            <div class="form-group" style="padding: 10px;!important">
                <label> Valor*</label>
                <input type="number" name="valor" class="form-control" required>
            </div>
            <div class="form-group" style="padding: 10px;!important">
                <label> Data de Inclusão*</label>
                <input type="date" name="inclusao" class="form-control" required>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Abortar</button>
            <button  name="cadastrarnfe" class="btn btn-primary">Incluir</button>
            <div class="modal-footer">
        </div>
      </form>
      </div>
  </div>
</div>
</div>
  <div class="modal fade" id="registrarnf" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top: 1%; border-radius:0px; !IMP ">
  <div class="modal-dialog" role="document">
    <div class="modal-content"style="margin-top: -1rem; border-radius:0px;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style=" font-weight: bold; color:#0e4277;">Fluxo de Cheque</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
            </div>  
    </div>
  </div>
</div>
</div>

</div>


<div class="MENU" style=" margin-top: 15px; margin-left: 20%;  ">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active"  aria-current="page" style="color: #0e4277; !important"><a href="home.php">Visão Geral</a></li>
    <li class="breadcrumb-item active" aria-current="page" style="color: #0e4277; !important">Financeiro</li>
    <li class="breadcrumb-item active" aria-current="page" style="color: #0e4277; !important">Notas Fiscais</li>
    <nav class="navbar navbar-expand-lg bg-light">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style= "color:#0e4277; margin-left: 740px; margin-top: -3.5rem; !important ">
           Imprimir
          </a>
          <ul class="dropdown-menu"style= "color:#0e4277; margin-left: 740px; margin-top: -1.2rem; !important ">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
       
</nav>
  </ol>
  </div>  
<main style="margin-top:-6rem; margin-left: 15%;  ">
<div class="card" style="width: 90%; border-radius: 0px;">
        <h1 style="font-size:25px; margin:20px; margin-left: 20px; font-weight: bold; color:#0e4277;"> Notas Fiscais / Entrada / Saída</h1>
        <!--<select onchange="myFunction()">-->
        <select id="selEmpresa" class="form-select form-select-sm" aria-label=".form-select-sm example" style="width: 30%; margin-left: 2%;" onchange="getSelectValue()">
  <option selected>Selecionar empresa...</option>
  <?php
        $queryempre = "SELECT idemp, razao, cnpj, contas FROM cadastroempresa";
        $query_run = mysqli_query($con, $queryempre);
  
        if(mysqli_num_rows($query_run) > 0)
        {
            while($row = mysqli_fetch_assoc($query_run))  
            {
              echo  '<option value="'. $row['razao'] . '"/'. $row['idemp'] . '">' . $row['razao'] . '/'. $row['cnpj'] .'</option>';
            }
        }  

?>
  <script>
  function getSelectValue()
  {
    var selectedValue = document.getElementById("selEmpresa").value;  
    console.log(selectedValue);
  }



</script>
</script>
</select>
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#cadastronfe" style="margin-left:34%; margin-top:-2rem; width:18%; padding: -1.8rem;">Adicionar</button>

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
            <?php
            $vlHoje = 0;
            $vlTotal = 0;
                  $query = "SELECT N.*, E.razao FROM notasfiscais As N INNER JOIN cadastroempresa As E ON N.idemp = E.idemp ";
                  
                  /*
                  Se a variável de sessão do SELECT estiver carregada
                  insere uma clásula WHERE na string do banco de dados
                  if ($_SESSION[valor do SELECT] != ''){
                    $query .= " WHERE N.idemp = " . $_SESSION[valor do SELECT];
                  }
                  else{
                    echo "Nenhum resultado encontrado;"
                  }
                  */

                  $query_run = mysqli_query($con, $query);
                    ?>
            <thead>
                            <tr style="background:#E9E9E9;font-weight: 700;font-style: normal;font-size: 15px;">
                            <th scope="col" style="color:#0e4277;"> Inclusão</th>
                            <th scope="col" style="color:#0e4277;">Emitente </th>
                            <th scope="col" style="color:#0e4277;"> Remetente</th>
                            <th scope="col" style="color:#0e4277;">Chave de Acesso </th>
                            <th scope="col" style="color:#0e4277;">Número NF-E </th>
                            <th scope="col" style="color:#0e4277;">Valor </th>
                            
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

                          echo '<tr>';
                              echo '<td>' . date('d/m/Y', strtotime($row['inclusao'])) . '</td>';
                              echo '<td>' .  $row['Remente'] . '</td>';
                              echo '<td>' .  $row['razao'] . '</td>';
                              echo '<td>' .  $row['chave'] . '</td>';
                              echo '<td>' .  $row['numero'] . '</td>';
                              echo '<td>R$' . number_format($row['valor'], 2, ",", ".") . '</td>';
                              echo '</tr>';

                              if ($row['inclusao'] == $dataLocal){
                                $vlHoje += $row['valor'];
                              }
  
                              $vlTotal += $row['valor'];
  
                            }
                          }
                            ?>
                        </tbody>
                        </table>
</div>
</div>                        

<div class="card" style=" margin-left:250px; width:90%; border-radius:0; margin:2px; margin-top:1rem; ">

    
<div class="card-body" style=" margin-top: 10px; !important">
    <h5 class="card-subtitle mb-2 text-muted" style=" font-size: 13px;margin-left: 15px;"></h5>
    <h6 class="card-subtitle mb-2 text-muted" style=" font-size: 25px; margin-left: 30px; "></body><?php echo number_format($vlHoje, 2, ",", ".");?></h6>
    <h5 class="card-subtitle mb-2 text-muted" style=" font-size: 13px;margin-left: 15px; ">Total NF-E(R$)</h5>
    
    <div class="d-flex" style=" margin-top: -55px;margin-left: 130px;height: 50px;">
      <div class="vr"></div>
    </div>
     
    <div class="card2" style="margin-left:180px;margin-top:-3.6rem;">
    <h5 class="card-subtitle mb-2 text-muted" style=" font-size: 13px;margin-left: px;"></h5>
    <h6 class="card-subtitle mb-2 text-muted" style=" font-size: 25px; margin-left: -30px;"><?php echo number_format($vlTotal, 2, ",", ".");?></h6>
    <h5 class="card-subtitle mb-2 text-muted" style=" font-size: 13px;margin-left: -1rem; ">Total NF-E(R$)</h5>
    </div>  
</div>

</main>
<div aria-label="Page navigation example" style="margin-right: 125px; border-radius: none;">
  <ul class="pagination justify-content-end">
    <li class="page-item disabled">
      <a class="page-link">Páginas</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Proximo</a>
    </li>
  </ul>
</div>  

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

</html> 
