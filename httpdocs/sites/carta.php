<?php header("Location: sites/burger.php?nombre=hola") ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Platos B&B</title>

   <!--============ FAVICON ============-->

   <link 
        rel="icon"
        type="image/png" 
        href="img/favicon-dark.png"
        media="(prefers-color-scheme: dark)"
    >

    <link 
        rel="icon"
        type="image/png" 
        href="img/favicon.png"
        media="(prefers-color-scheme: light)"
    >

  <!--============ BOOTSTRAP ============-->

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
  <script src="js/bootstrap/bootstrap.bundle.min.js"></script>

  <!--============ PERSONAL =============-->

  <link rel="stylesheet" href="css/carta.css">

</head>
<body class="dark">

   <!--=========== BARRA DE NAVEGACION ============-->

  <nav class="p-3 mb-3 border-bottom nav-bar">
      <div class="container-fluid">
         <div class="d-flex flex-wrap align-items-center justify-content-start">

            <!--============ BRAND LOGO ============-->

            <a href="usuario.php" class="m-0 d-flex align-items-center text-dark text-decoration-none order-1">
               <img src="img/brand-logo.png" width="35px">
            </a>

            <!--============== LINKS ==============-->

            <ul class="nav mx-auto ms-md-4 col-12 col-sm-auto justify-content-center order-3">
               <li><a href="carta" class="nav-link px-2">¡Nuestra carta!</a></li>
               <li><a href="contacto" class="nav-link px-2">Contacto</a></li>
               <li><a href="noticias" class="nav-link px-2">Noticias</a></li>
            </ul>

            <!--============= PERFIL =============-->

            <div class="profile dropdown ms-auto ms-sm-0 order-2 order-sm-4">
               <a href="#" class="d-block text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="https://github.com/mdo.png" alt="mdo" width="37" height="37" class="rounded-circle">
               </a>
               <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                  <li><a class="dropdown-item" href="#">Perfil</a></li>
                  <li><a class="dropdown-item" href="#">Historial</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Desconectar</a></li>
               </ul>
            </div>
         </div>
      </div>
   </nav>



   <section class="container">

      <!--============= FILTRO =============-->

      <header class="row mb-3">
         <div class="dropdown col-auto ms-auto">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="filtro" data-bs-toggle="dropdown" aria-haspopup="true"
                  aria-expanded="false">
                     <i class="bi bi-filter"></i> &nbsp; <small>Ordenar por</small> &nbsp;
                  </button>
            
            <div class="dropdown-menu" aria-labelledby="filtro">
               <button class="dropdown-item" href="#" ><small>Nombre</small></button>
               <button class="dropdown-item" href="#" ><small>Precio</small></button>
            </div>
         </div>
      </header>

      <!--============= Platos =============-->
      <main>
         <div class="card col-12">
            <img class="card-img-top" src="https://www.goiko.com/wp-content/uploads/2021/12/Ficha-de-producto_1200x600_LaSmash-340x340.jpg" alt="Title">
            <div class="card-body">
               <h4 class="card-title">La Smash</h4>
               <p class="card-text">
                  Una burger con bacon, muuuucho queso americano, cebolla a la plancha y 2 carnes de 100 g estilo SMASH 😎 <br>
                  ¿Cómo? Carnes aplastadas, más finas, crujientes por fuera, jugosas por dentro y con un sabor más potente ⚡️<br>

                  ¡No te lo pienses mash 🍔!</p>
            </div>
         </div>
      </main>
      


   </section>
</body>
</html>