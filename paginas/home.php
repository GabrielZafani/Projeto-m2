  
<img class="maria" src="images/maria.png" alt="">
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

<div class="container">

<div><img src="images/maria.png" alt=""></div>
<div>
<h2 class="text-center mt-5 mb-5">
    Conheça um pouco sobre a gente!
</h2>
<p>
    
</p>
</div>


</div>



    
    




