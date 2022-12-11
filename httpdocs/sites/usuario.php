<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>¡Bienvenido! B&B</title>

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

  <link rel="stylesheet" href="css/styles.css">

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
</body>
</html>