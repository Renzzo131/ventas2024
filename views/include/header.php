<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de compras</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL;?>/views/plantilla/assets/css/style.css">
</head>

<body style="background-color: rgb(231, 231, 231);">
    <!--MENÚ DE NAVEGACIÓN-->
    <div class="container-fluid m-0 p-0 b-0">
        <nav class="navbar navbar-expand-lg p-0 m-0" style="background-color: #212121 ;" data-bs-theme="light">
            <div class="container-fluid m-0 p-0">
                <a class="navbar-brand p-0 m-0" href="<?php echo BASE_URL?>/inicio">
                    <img src="./views/plantilla/assets/img/descarga.png" alt="Bootstrap" width="150" height="80">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-light" aria-current="page" href="<?php echo BASE_URL;?>/inicio">Inicio</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active text-light" href="<?php echo BASE_URL?>/producto" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Productos
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?php echo BASE_URL?>/producto">Gorras</a></li>
                                <li><a class="dropdown-item" href="<?php echo BASE_URL?>/producto">Camisas</a></li>
                                <li><a class="dropdown-item" href="<?php echo BASE_URL?>/producto">Polos</a></li>
                                <li><a class="dropdown-item" href="<?php echo BASE_URL?>/producto">Pantalones</a></li>
                                <li><a class="dropdown-item" href="<?php echo BASE_URL?>/producto">Zapatillas</a></li>
                                <li><a class="dropdown-item" href="<?php echo BASE_URL?>/producto">Chaquetas</a></li>
                                <li><a class="dropdown-item" href="<?php echo BASE_URL?>/producto">Accesorios</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-light" href="<?php echo BASE_URL?>/blog">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-light" href="<?php echo BASE_URL?>/nosotros">Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-light" href="<?php echo BASE_URL?>/contactenos">Contactenos</a>
                        </li>
                    </ul>
                    <form class="d-flex m-1" role="search">
                        <input class="form-control me-2" type="search" aria-label="Search" placeholder="Buscar...">
                        <button class="btn btn-danger" type="submit" style="background-color: red;"><svg
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="white"
                                style="width: 25px; height: 25px"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path
                                    d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                            </svg></button>
                    </form>
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0 d-flex justify-content-center align-items-center">
                        <li class="nav-but">
                            <a href="<?php echo BASE_URL?>/perfil"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                    fill="white"
                                    style="width: 30px; height:30px"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path
                                        d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z" />
                                </svg></a>
                        </li>
                        <li class="nav-but">
                            <a href="<?php echo BASE_URL?>/login" class="btn"
                                style="background-color: red; color: white;">Iniciar sesión</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="d-flex justify-content-center align-items-center">
                            <a href="<?php echo BASE_URL?>/carrito"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512" fill="white"
                                    style="width: 30px; height:30px"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path
                                        d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
                                </svg></a>
                        </li>
                    </ul>
                </div>
            </div>

        </nav>
    </div>