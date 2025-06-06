  
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
    <div class='card-footer p-1'>
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
      <img class="imgfilhos" src="images/filhosdemaria.png" alt="Imagem" >
    </div>

     <div class="sobreMaria col-md-6">
      <h2><strong>Conheça Nossa História</strong></h2>
      <p class="textP" >
        Nossa comunidade, pautada nos ensinamentos do <br> Evangelho e na devoção mariana, busca incessantemente <br> promover a fé, a caridade e a união entre seus membros. <br> Somos um lar espiritual onde cada indivíduo é acolhido <br> e incentivado a crescer em sua jornada de fé, sempre sob <br> o manto protetor de Nossa Senhora.
      </p>

      <a class="aLeia" href="sobre.php">Leia mais</a>
    </div>
    
  </div>
</div>

<div class="container2 mb-5">
  <div class="row align-items-center">
    
  <div class="col-md-6 text-center">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14587.465367862365!2d-52.499856652139414!3d-23.929786563545125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ed6ff3990f303b%3A0xcb3ca80b2dcf8a54!2sCapela%20Santo%20Est%C3%AAv%C3%A3o!5e0!3m2!1spt-BR!2sbr!4v1749244564863!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

     <div class="localização col-md-6">
      <h2><strong>Local</strong></h2>
      <p class="textP" >
       
      </p>

      <a class="aLeia" href="sobre.php">Leia mais</a>
    </div>
    
  </div>
</div>




    
    




