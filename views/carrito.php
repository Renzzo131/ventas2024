 <!--PROGRESO DE LA COMPRA-->

 <div class="conatiner-fluid col-12 m-0 d-flex flex-column align-items-center">
        <h4 class="mt-3">PROGRESO DE LA COMPRA</h4>
        <div class="progress col-5" role="progressbar" aria-label="Example with label" aria-valuenow="25"
            aria-valuemin="0" aria-valuemax="100" style="background-color: white;">
            <div class="progress-bar" style="width: 25%; background-color: red;">25%</div>
        </div>
    </div>

    <!--PRODUCTOS DEL CARRITO-->

    <div class="w-100 row m-0">
        <div id="productos" class="w-75" style="min-height: 700px;">
            <div class="bordeinferior">
                <div class="titulo">
                    <p>Tus productos</p>
                </div>
            </div>
            <div class="card w-100 row m-0 mb-1" style="height: 150px;">
                <img src="./views/plantilla/assets/img/polo1.webp" alt="producto" class="h-100 p-2 col-2" style="border-radius: 10px;">
                <div id="producto" class="p-0 col-4 h-100">
                    <h4>Polo con logo de espadas</h4>
                    <p>Polo</p>
                </div>
                <div id="precio" class="col-1 p-0 h-100 d-flex justify-content-center align-items-center"><input
                        id="precio_p1" type="hidden" value="30" readonly>S/.30.00</div>
                <div id="cantidad" class="col-3 p-4 h-100 row d-flex justify-content-center align-items-center">
                    <button class="btn btn-danger col-2 h-50 m-1" onclick="restarcantidad();">-</button>
                    <input id="cantidad_p1" type="number" class="col-6 h-50 m-1" value="1">
                    <button class="btn btn-dark col-2 h-50 m-1" onclick="sumarcantidad();">+</button>
                </div>
                <div id="subtotal" class="col-1 p-0 h-100 d-flex justify-content-center align-items-center">S/.30.00
                </div>
                <div class="col-1 h-100 d-flex justify-content-center align-items-center">
                    <button class="btn btn-danger">Eliminar</button>
                </div>
            </div>

        </div>

        <!--RESUMEN DE LA COMPRA-->

        <div id="monto" class="w-25" style=" height: 200px;">
            <div class="card"
                style="width: calc(100% - 20px); margin: 10px;border-radius: 10px; padding: 10px;  background-color: white;">
                <h4 class="text-center">INFORMACIÓN DE PAGO</h4>
                <hr class="divider">
                <H5>Subtotal: S/. 30.00</H5>
                <hr class="divider">
                <div class="row col-12">
                    <H5 class="col-6">Cód. de Descuento: </H5>
                    <input class="col-6" type="text">
                </div>
                <hr class="divider">
                <h5>Descuento: S/. 10.00</h5>
                <hr class="divider">
                <h5>Costo de Envío: S/. 15.00</h5>
                <hr class="divider">
                <H4>Total: S/. 35.00</H4>
                <hr class="divider">
                <div id="medios_pago" class="col-12 d-flex justify-content-center">
                    <a href="https://www.yape.com.pe/" target="_blank"><img class="col-3 m-2"
                            style="width: 60px; height: 50px; border-radius: 10px;" src="./views/plantilla/assets/img/yape.png"
                            alt=""></a>
                    <a href="https://plin.pe/" target="_blank"><img class="col-3 m-2"
                            style="width: 60px; height: 50px; border-radius: 10px;" src="./views/plantilla/assets/img/plin.png"
                            alt=""></a>
                    <a href="https://www.visa.com.pe/" target="_blank"><img class="col-3 m-2"
                            style="width: 100px; height: 50px; border-radius: 10px;" src="./views/plantilla/assets/img/visa.jpg"
                            alt=""></a>
                </div>
                <div class="text-center d-grid gap-2 col-6 mx-auto">
                    <a href="#" class="btn btn-dark">Pagar</a>
                    <a href="./productos.html" class="btn btn-danger">Seguir Comprando</a>
                </div>
            </div>
        </div>

        <!--PRODUCTOS RELACIONADOS-->

        <div class="container-fluid m-0 p-3 row">
            <div class="bordeinferior">
                <div class="titulo">
                    <p>Productos recomendados</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 p-2">
                <div class="card" style="height: auto;">
                    <img src="./views/plantilla/assets/img/chaqueta3.webp" class="card-img-top" alt="imagen"
                        style="height: 300px; max-height: 350px;">
                    <div class="card-body">
                        <h5 class="card-title" style="height: 75px;">Chaquetas tácticas Retro para hombre</h5>
                        <p class="card-text m-0" style="overflow-x:hidden; min-height: 100px; max-height: 100px;">Lorem
                            ipsum dolor, sit
                            amet consectetur adipisicing elit. Ds dicta quos tenetur delectus modi?</p>
                        <div class="col-12">
                            <p class="text-end" style="font-weight: 700;">S/120.00</p>
                        </div>
                        <a href="#" class="btn btn-dark col-12">Ve detalles</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 p-2">
                <div class="card">
                    <img src="./views/plantilla/assets/img/pantalon2.jpg" class="card-img-top" alt="imagen"
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
                        <a href="#" class="btn btn-dark col-12">Ve detalles</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 p-2">
                <div class="card">
                    <img src="./views/plantilla/assets/img/polo2.webp" class="card-img-top w-100" alt="imagen"
                        style="height: 300px; max-height: 350px;">
                    <div class="card-body">
                        <h5 class="card-title" style="height: 75px;">Chaquetas de algodón para hombre Chaquetas
                            militares</h5>
                        <p class="card-text m-0" style="overflow-x:hidden; min-height: 100px; max-height: 100px;">Lorem
                            ipsum dolor, sit
                            amet consectetur adipisicing elit. Ds dicta quos tenetur delectus modi?</p>
                        <div class="col-12">
                            <p class="text-end" style="font-weight: 700;">S/120.00</p>
                        </div>
                        <a href="#" class="btn btn-dark col-12">Ve detalles</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 p-2">
                <div class="card">
                    <img src="./views/plantilla/assets/img/pants9.webp" class="card-img-top" alt="imagen"
                        style="height: 300px; max-height: 350px;">
                    <div class="card-body">
                        <h5 class="card-title" style="height: 75px;">Chaquetas Para Hombre Ejército Chaqueta De
                            Bombardero Para Hombre</h5>
                        <p class="card-text m-0" style="overflow-x:hidden; min-height: 100px; max-height: 100px;">Lorem
                            ipsum dolor, sit
                            amet consectetur adipisicing elit. Ds dicta quos tenetur delectus modi?</p>
                        <div class="col-12">
                            <p class="text-end" style="font-weight: 700;">S/120.00</p>
                        </div>
                        <a href="#" class="btn btn-dark col-12">Ve detalles</a>
                    </div>
                </div>
            </div>

        </div>