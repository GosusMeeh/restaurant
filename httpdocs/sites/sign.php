<?php 

if (isset($_POST['to-sign'])){
    setcookie("registrado",true);
    // Te manda a la zona de inicio de sesión
    header("Location: entrada");
}
else if (isset($_POST['to-register'])) {
    // Elimina la cookie
    setcookie("registrado", "" , time() - 1);
    // Te manda al registro
    header("Location: registro");
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php if(isset($_COOKIE['registrado'])): ?>
    <title>Regístrate B&B</title>
    <?php else: ?>
    <title>Inicia sesión B&B</title>
    <?php endif; ?>

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

    <link rel="stylesheet" href="css/registro.css">

    <style>
    </style>
</head>
<body class="dark">
    <main class="row gx-5 mx-auto justify-content-center pt-4">
        <div class="tarjeta col-10 row g-0 bg-db px-5 py-3 ">
            <img src="img/brand-logo.png" class="mx-auto mb-3" style="width: 100px; ">

            <!--====== FORMULARIO DE REGISTRO ======-->

            <?php if(!isset($_COOKIE['registrado'])): ?>
                <form action="../../src/registro.php" class="needs-validation" id="registro" novalidate>
                    <h4 class="mb-3 text-sm-center">¿No te has registrado aún?</h4>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" placeholder=" " required>
                        <label for="floatingInput">Correo</label>
                        <small class="invalid-feedback text-end">Este correo no es válido</small>
                    </div>  
                    <div class="form-floating mb-4">
                        <input type="password" class="form-control" placeholder=" " required>
                        <label for="floatingInput">Contraseña</label>
                        <small class="invalid-feedback text-end">Tienes que escribir una contraseña</small>
                    </div>  
                    <input type="submit" class="btn envio col-12 mb-4" value="Registrarse">
                    <script src="js/form_validation.js"></script>
                </form>
                <form method="POST" class="row g-0"> <button name="to-sign" type="submit" class="btn modificarCookies ms-auto col-auto">Ya estoy registrado</button> </form>

            <!--======= FORMULARIO DE INICIO =======-->

            <?php else: ?>
                <form action="php/registro.php" class="needs-validation" id="registro" novalidate>
                    <h4 class="mb-3 text-sm-center">Inicia sesión</h4>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" placeholder=" " required>
                        <label for="floatingInput">Correo</label>
                        <small class="invalid-feedback text-end">Este correo no es válido</small>
                    </div>  
                    <div class="form-floating mb-4">
                        <input type="password" class="form-control" placeholder=" " required>
                        <label for="floatingInput">Contraseña</label>
                        <small class="invalid-feedback text-end">Tienes que escribir una contraseña</small>
                    </div>  
                    <input type="submit" class="btn envio col-12 mb-4" value="Acceder">
                    <script src="js/form_validation.js"></script>
                </form>

                <form method="POST" class="row g-0"> <button name="to-register" type="submit" class="btn modificarCookies ms-auto col-auto">Quiero registrarme</button> </form>
            <?php endif; ?>
        </div>
        <div class="tarjeta col-10 col-lg-3 mt-3 mt-lg-0 row px-3 pb-3 pt-4 mx-3 mb-3 mb-lg-0">
            <h6>¿Dónde estamos?</h6>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12565.114744236715!2d-1.2203883!3d38.0638904!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x62b3221f242c7c63!2sBurger%20King!5e0!3m2!1ses!2ses!4v1669571626681!5m2!1ses!2ses" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <p class="primary-text pt-2"> <i class="bi bi-geo-alt-fill link-light active me-1"></i>C. Marchante, 30500 Molina de Segura, Murcia</p>
            <p class="primary-text"><i class="bi bi-telephone link-light active me-1"> </i>669 23 37 72</p>
            <p class="primary-text"><i class="bi bi-mailbox2 link-light active me-1"> </i>burguer-molina@burgerking.es</p>
        </div>
    </main>

</body>
</html>