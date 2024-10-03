<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL;?>/views/plantilla/assets/css/style.css">
</head>

<body style="background-image: url(./views/plantilla/assetsassets/img/login-fondo.jpg); background-repeat: no-repeat; background-size: cover; background-position: center; background-attachment: fixed;">
    <div class="container-fluid">
        <form action="" method="" class="col-3 row" id="formulario">
            <div class="col-12 mb-2 d-flex justify-content-center">
                <img src="./views/plantilla/assets/img/descarga.png" alt="" id="image" style="width: 80%; height: 90%;">
            </div>
            <div class="d-flex justify-content-center align-items-center text-light">
                <h3>Login</h3>
            </div>
            <div class="col-12 mb-3">
                <label for="usuario" class="form-label text-light">Nombre de usuario:</label>
                <input type="text" class="form-control" value="admin" required>
            </div>
            <div class="col-12 mb-3">
                <label for="pass" class="form-label text-light">Contraseña:</label>
                <input type="password" class="form-control" value="admin" required>
                <a href="#" class="text-light d-flex justify-content-end">¿Olvidaste tu contraseña?</a>
            </div>
            <div class="col-md-12 d-flex justify-content-around mb-3">
                <a href="../index.html" type="button" class="btn btn-danger" style="background-color: red;">Iniciar sesión</a>
            </div>
            <div class="col-12 mb-3">
                <p class="text-light text-center m-0 p-0">- o -</p>
            </div>
            <div class="col-12 mb-3 d-flex justify-content-center">
                <button class="col-12" style="border-radius: 5px; border: none;">Iniciar sesión con google <img src="../assets/img/gmail.png" alt="" width="18" height="16"></button>
            </div>
            <div class="col-12 mb-3">
                <p class="text-light text-center m-0 p-0">¿No tienes cuenta?</p>
                <a href="#" class="text-light d-flex justify-content-center">Crear cuenta</a>
            </div>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</html>