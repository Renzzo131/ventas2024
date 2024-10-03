    <!--DETALLES DEL PRODUCTO-->
    <!--Imágenes-->

    <div class="container-fluid col-12 mt-3 mb-3 p-0 d-flex justify-content-around">
        <div class="col-3 row">
            <div class="col-12 m-0 p-0">
                <img src="../views/plantilla/assets/img/pants2.jpg" alt="" style="height: 350px; width: 100%;">
            </div>
            <div class="col-4 m-0 p-0">
                <img src="../views/plantilla/assets/img/pants8.jpg" alt="imagen" style="height: 120px; width: 100%;">
            </div>
            <div class="col-4 m-0 p-0">
                <img src="../views/plantilla/assets/img/pants4.jpg" alt="imagen" style="height: 120px; width: 100%;">
            </div>
            <div class="col-4 m-0 p-0">
                <img src="../views/plantilla/assets/img/pants5.webp" alt="imagen" style="height: 120px; width: 100%;">
            </div>
        </div>

        <!--Descripción-->

        <div class="col-4 p-2" style="background-color: white;">
            <div class="col-12">
                <h4>Pantalon jean hip hop para hombre</h4>
            </div>
            <div class="bordeinferior m-0 p-0 col-12"></div>
            <div class="col-12">
                <b style="background: greenyellow; font-size: 25px;">S/120.00</b>
            </div>
            <div class="col-12">
                <p>Marca: Levi's</p>
                <p>Color: Azul</p>
                <form action="">
                    <label for="talla">Talla:</label>
                    <select name="talla" id="talla">
                        <option value="28">28</option>
                        <option value="32">32</option>
                        <option value="34">34</option>
                        <option value="36">36</option>
                    </select>
                </form>
            </div>
            <div class="col-12 mt-3 mb-3" style="height: 200px ; overflow-x: hidden; background-color: rgb(184, 184, 184);">
                <p><b>Apariencia elegante:</b> Pantalones cortos de cintura alta con un diseño moderno, ideal para la ropa de
                    trabajo o los fines de semana.</p>
                <p><b>Espesura:</b> Los puños están diseñados con un ajuste de cintura alta, que pueden apretar los muslos, no
                    se preocupe por el deslizamiento y la deformación del hilo.</p>
                <p><b>Caluroso:</b> Los pantalones de chándal para hombre son ligeros, transpirables y absorben la humedad.</p>
            </div>
            <div class="row p-0 m-0 col-12">
                <a href="./carrito.html" class="btn btn-dark col-5">Añadir al carrito</a>
                <div id="cantidad" class="col-5 d-flex justify-content-center align-items-center">
                    <button class="btn col-2 m-0 p-1" style="background: red; color: white;" onclick="restarcantidaddetalle();">-</button>
                    <input id="cantidad_p1" type="number" class="col-6" value="1">
                    <button class="btn btn-primary col-2 m-0 p-1" onclick="sumarcantidaddetalle();">+</button>
                </div>
                <div class="col-2">
                    <a href="https://www.facebook.com/AvalanchPeru/?locale=es_LA" target="_blank"><svg
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                            style="width: 30px; height: 30px;"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path
                                d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM384 160c0 35.3-28.7 64-64 64c-15.4 0-29.5-5.4-40.6-14.5L194.1 256l85.3 46.5c11-9.1 25.2-14.5 40.6-14.5c35.3 0 64 28.7 64 64s-28.7 64-64 64s-64-28.7-64-64c0-2.5 .1-4.9 .4-7.3L174.5 300c-11.7 12.3-28.2 20-46.5 20c-35.3 0-64-28.7-64-64s28.7-64 64-64c18.3 0 34.8 7.7 46.5 20l81.9-44.7c-.3-2.4-.4-4.9-.4-7.3c0-35.3 28.7-64 64-64s64 28.7 64 64z" />
                        </svg></a>
                </div>
            </div>
        </div>

        <!--Relacionado-->

        <div class="card col-3 p-3" style="background-color: white;">
            <div class="col-12 fw-500">
                <h5>LUOBANIU Hombre Baggy Jeans Hip Hop Jeans Loose fit 90s Vintage Cargo</h5>
            </div>
            <div class="col-12 d-flex justify-content-center align-items-center">
                <img src="../views/plantilla/assets/img/pants1.jpg" alt="pantalon" style="width: 200px;">
            </div>
            <div class="col-12">
                <p class="text-center fw-bold fs-2">S/.130.00</p>
            </div>
            <div class="col-12">
                <a href="./detalle.html" class="btn col-12" style="background: red; color: white;">Ver detalles</a>
            </div>
        </div>
    </div>

    <!--Productos recomendados-->

    <div class="container-fluid col-12 m-0 p-0 row">
        <div class="bordeinferior">
            <div class="titulo">
                <p>Productos relacionados</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 p-2">
            <div class="card" style="height: auto;">
                <img src="../views/plantilla/assets/img/chaqueta3.webp" class="card-img-top" alt="imagen"
                    style="height: 300px; max-height: 350px;">
                <div class="card-body">
                    <h5 class="card-title" style="height: 75px;">Chaquetas tácticas Retro para hombre</h5>
                    <p class="card-text m-0" style="overflow-x:hidden; min-height: 100px; max-height: 100px;">Lorem
                        ipsum dolor, sit
                        amet consectetur adipisicing elit. Ds dicta quos tenetur delectus modi?</p>
                    <div class="col-12">
                        <p class="text-end" style="font-weight: 700;">S/120.00</p>
                    </div>
                    <a href="./detalle.html" class="btn btn-dark col-12">Ve detalles</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 p-2">
            <div class="card">
                <img src="../views/plantilla/assets/img/pantalon2.jpg" class="card-img-top" alt="imagen"
                    style="height: 300px; max-height: 350px;">
                <div class="card-body">
                    <h5 class="card-title" style="height: 75px;">Chaquetas de algodón para hombre Chaquetas Labymos
                        Chaquetas</h5>
                    <p class="card-text m-0" style="overflow-x:hidden; min-height: 100px; max-height: 100px;">Lorem
                        ipsum dolor, sit
                        amet consectetur adipisicing elit. Ds dicta quos tenetur delectus modi?</p>
                    <div class="col-12">
                        <p class="text-end" style="font-weight: 700;">S/120.00</p>
                    </div>
                    <a href="./detalle.html" class="btn btn-dark col-12">Ve detalles</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 p-2">
            <div class="card">
                <img src="../views/plantilla/assets/img/polo2.webp" class="card-img-top w-100" alt="imagen"
                    style="height: 300px; max-height: 350px;">
                <div class="card-body">
                    <h5 class="card-title" style="height: 75px;">Chaquetas de algodón para hombre Chaquetas militares
                    </h5>
                    <p class="card-text m-0" style="overflow-x:hidden; min-height: 100px; max-height: 100px;">Lorem
                        ipsum dolor, sit
                        amet consectetur adipisicing elit. Ds dicta quos tenetur delectus modi?</p>
                    <div class="col-12">
                        <p class="text-end" style="font-weight: 700;">S/120.00</p>
                    </div>
                    <a href="./detalle.html" class="btn btn-dark col-12">Ve detalles</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 p-2">
            <div class="card">
                <img src="../views/plantilla/assets/img/pants9.webp" class="card-img-top" alt="imagen"
                    style="height: 300px; max-height: 350px;">
                <div class="card-body">
                    <h5 class="card-title" style="height: 75px;">Chaquetas Para Hombre Ejército Chaqueta De Bombardero
                        Para Hombre</h5>
                    <p class="card-text m-0" style="overflow-x:hidden; min-height: 100px; max-height: 100px;">Lorem
                        ipsum dolor, sit
                        amet consectetur adipisicing elit. Ds dicta quos tenetur delectus modi?</p>
                    <div class="col-12">
                        <p class="text-end" style="font-weight: 700;">S/120.00</p>
                    </div>
                    <a href="./detalle.html" class="btn btn-dark col-12">Ve detalles</a>
                </div>
            </div>
        </div>