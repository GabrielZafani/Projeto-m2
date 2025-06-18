<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Filhos de Maria</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
  <script src="https://kit.fontawesome.com/33c23dcc40.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/pages.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined&display=swap" />
  
  <style>
    /* Navbar azul para páginas internas */
    .bg-azul {
      background-color: #000032 !important;
    }

   

    /* Sua classe para navbar transparente */
    .bg-tranparents {
      background-color: transparent !important;
    }
  </style>
</head>
<?php
  // Captura a página
  $pagina = "home";
  if (isset($_GET["param"])) {
      $param = explode("/", $_GET["param"]);
      $pagina = $param[0];
  }
  $isHome = ($pagina === "home");
?>
<body class="<?php echo $isHome ? 'home' : ''; ?>">

<nav id="mainNavbar" class="navbar navbar-expand-lg navbar-dark <?php echo $isHome ? 'bg-tranparents fixed-top' : 'bg-azul'; ?>">
  <div class="container">
    <!-- Logo -->
    <a class="navbar-brand" href="home"><img class="logo" src="images/logo.jpg" alt="LOGO" /></a>
    <!-- Botão para telas pequenas -->
    <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- SideBar -->
    <div class="offcanvas offcanvas-end text bg-azul" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header text-white border-bottom">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Os Filhos de Maria</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body d-flex custom-offcanvas">
        <ul class="navbar-nav justify-content-center align-items-center fs-5 flex-grow-1 pe-3">
          <li class="nav-item mx-5">
            <a class="nav-link <?php echo $isHome ? 'active' : ''; ?>" aria-current="page" href="home"><i class="fa-solid fa-house" style="color: #ffffff;"></i> Home</a>
          </li>
          <li class="nav-item mx-5">
            <a class="nav-link <?php echo !$isHome && $pagina === 'evento' ? 'active' : ''; ?>" href="evento"><i class="fa-solid fa-calendar-days" style="color: #ffffff;"></i> Eventos</a>
          </li>
          <li class="nav-item mx-5">
            <a class="nav-link <?php echo !$isHome && $pagina === 'sobre' ? 'active' : ''; ?>" href="sobre"><i class="fa-solid fa-user-large" style="color: #ffffff;"></i> Sobre</a>
          </li>
        </ul>
        <div class="d-flex justify-content-center align-items-center">
          <li class="nav-item aLeia rounded-pill px-4 py-1">
            <a class="nav-link" href="contato">Contato</a>
          </li>
        </div>
      </div>
    </div>
  </div>
</nav>

<main>
  <?php
    $arquivo = "paginas/{$pagina}.php";
    if (file_exists($arquivo))
      include $arquivo;
    else
      include "paginas/erro.php";
  ?>
</main>

<footer class="fot text-center">
  <div class="container text-center">
    <div class="row">
      <div class="redes col-12 col-md-4 mb-3">
        <h3><strong>Redes Sociais</strong></h3>
        <a class="iconF" href="https://www.facebook.com/GrupodeOracaoOsFilhosdeMaria" target="_blank">
          <i class="fa-brands fa-facebook" style="color: #DAA520;"></i></a>
        <a class="iconF" href="https://www.instagram.com/osfilhosdemariaa/" target="_blank">
          <i class="fa-brands fa-instagram" style="color: #DAA520;"></i></a>
        <a class="iconF" href="https://www.youtube.com/@osfilhosdemaria2728/videos" target="_blank">
          <i class="fa-brands fa-youtube" style="color: #DAA520;"></i></a>
      </div>

      <div class="col-12 col-md-4 mb-3">
        <h3><strong>Contato</strong></h3>
        <p>Email: agendaosfilhosdemaria@gmail.com</p>
        <p>Tel: (44) 9 2002-4686</p>
      </div>
        
      <div class="col-12 col-md-4 mb-3">
        <h3><strong>Horários</strong></h3>
        <p>Domingo - 19:00</p>
        <p>Capela Santo Estêvão</p>
      </div>
    </div>
  </div>
  <hr>
  <p class="copy">&copy Os filhos de Maria - Todos direitos reservados.</p>
</footer>

<script>
  window.addEventListener("scroll", function () {
    const navbar = document.getElementById("mainNavbar");
    if (window.scrollY > 35) {
      navbar.classList.add("scrolled");
    } else {
      navbar.classList.remove("scrolled");
    }
  });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
