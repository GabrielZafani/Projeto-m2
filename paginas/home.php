  
<img class="maria" src="images/maria.png" alt="IMAGEM DE MARIA">
<div class="seta-baixo">⬇</div>


<?php 
     require "eventoArray.php"
    ?>
    <div class="row"> 
        <div> <h1 class="text-center mt-5 mb-5">Conheça nossos eventos!</h1></div>  
    <?php
    foreach($evento as $dados){
        echo "<div class='col-12 col-md-4'>
  <div class='card rounded-5px'>
    <img src='" . $dados['capas'] . "' class='card-img-top'>
    <div class='card-body'>
      <p class='{$dados['classe']}'>{$dados['text']}</p>
    </div>
    <div class='card-footer p-0'>
      <a href='#' class='botao w-100'>Leia mais</a>
    </div>
  </div>
</div>
";
}
?>

<div class="container2 mb-5">
  <div class="row align-items-center">
    
  <div class="col-md-6 text-center">
      <img class="imgfilhos" src="images/filhosdemaria.png" alt="Imagem" class="">
    </div>

     <div class="sobreMaria col-md-6">
      <h2 class="titleC"><strong>Conheça Nossa História</strong></h2>
      <p>
        Nossa comunidade, pautada nos ensinamentos do <br> Evangelho e na devoção mariana, busca incessantemente <br> promover a fé, a caridade e a união entre seus membros. <br> Somos um lar espiritual onde cada indivíduo é acolhido <br> e incentivado a crescer em sua jornada de fé, sempre sob <br> o manto protetor de Nossa Senhora.
      </p>

      <a class="aLeia" href="sobre.php">Leia mais</a>
    </div>
    
  </div>
</div>





    
    




