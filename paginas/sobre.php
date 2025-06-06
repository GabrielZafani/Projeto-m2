
<div class="row">
    <?php 
    foreach ($serviços as $indice => $valor) {

        echo "<div class='col-12 col-md-4'>
              <p class='text-danger'>
              $valor['nome']
              <br>
              <a href='serviços/{$indice}' class='btn btn-danger'>
              Detalhes
              </a>
              </p>" 

    };
?>

<div class="col-12 col-md-4">
    h


</div>
