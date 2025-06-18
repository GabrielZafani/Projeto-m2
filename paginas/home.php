  
<img class="maria" src="images/maria.png" alt="IMAGEM DE MARIA">
<div class="seta-baixo">⬇</div>


<?php 
     require "eventoArray.php"
    ?>
    <div class="row"> 
      <h1 class='text-center  mt-5'><strong>Conheça nossos eventos!</strong></h1>
<?php foreach($evento as $dados){
  echo "
  <div class='carde col-12 col-md-4 d-flex justify-content-center'>
    <div class='card p-3 shadow rounded-4 text-center' style='width: 18rem;'>
      <img src='" . $dados['capas'] . "' class='rounded-circle mx-auto d-block' style='width: 120px; height: 120px; object-fit: cover; margin-top: 10px;'>
      <div class='card-body'>
        <h5 class='card-title fw-bold'>" . $dados['text'] . "</h5>
        <p class='card-text'>" . $dados['descricao'] . "</p>
        <a href='" . $dados['link'] . "' class='aLeia rounded-pill px-4 py-2'> Saiba Mais </a>
      </div>
    </div>
  </div>";}
?>



<div class="container2 mb-5">
  <div class="row align-items-center">
    
  <div class="col-md-6 text-center">
      <img class="imgfilhos" src="images/filhosdemaria.png" alt="Imagem" >
    </div>

     <div class="sb textC col-md-6">
      <h2 ><strong>Conheça Nossa História</strong></h2> 
      <p class="textP" >
        Nossa comunidade, pautada nos ensinamentos <br> do  Evangelho e na devoção mariana, busca incessantemente  promover a fé, a caridade e a <br>união entre seus membros.  Somos um lar espiritual <br> onde cada indivíduo é acolhido e incentivado a <br> crescer em sua jornada de fé, sempre sob  o manto protetor de Nossa Senhora. 
      </p> 
      <a class=" cont2Aleia aLeia rounded-pill px-4 py-2" href="sobre.php">Saiba mais</a>

      
    </div>
    
  </div>
</div>



<div class="container3 mb-5 mt-5">
  <div class="row align-items-center">
    
    <div class="col-md-6 text-center">
      <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14587.465367862365!2d-52.499856652139414!3d-23.929786563545125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ed6ff3990f303b%3A0xcb3ca80b2dcf8a54!2sCapela%20Santo%20Est%C3%AAv%C3%A3o!5e0!3m2!1spt-BR!2sbr!4v1749244564863!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

     <div class="loc textC col-md-6">
      <h2 class="t2"><strong>Localização</strong></h2> 
      <p class="textP" >
        Capela Santo Estêvão<br> 
        Av. Vereador Ramiro Rosolen <br> 
        Jardim Bahia <br> 
        Araruna - PR, 87260-000 <br>
        (Obs. Ao lado da Escola Municipal <br> Abgail de Oliveira Guimarães) 

      </p>

      <a class="aLeia rounded-pill px-4 py-2" href="sobre.php">Entre em contato</a>
    </div>
    
  </div>
</div>




    
    




