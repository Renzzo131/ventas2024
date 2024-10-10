

    <!--PRODUCTOS FILTRADOS-->

    <div class="w-100 row m-0">

        <!--FILTROS-->

        <div class="col-3 mt-3 mb-3">
            <div id="col-12 row" style="background-color: white;">
                <div class="col-12 text-light fs-1 text-center" style="background-color: black;">
                    <p>PANTALONES</p>
                </div>
                <div class="col-12 p-2">
                    <div class="labels mt-0">
                        <label>Color:</label>
                    </div>
                    <div class="col-12 m-0 p-0 row">
                            <button class="azul col-3" style="background-color: blue;">Azul</button>
                            <button class="negro col-3" style="background-color: black; color: white;">Negro</button>
                            <button class="blanco col-3" style="background-color: white;">Blanco</button>
                            <button class="violeta col-3" style="background-color: violet;">Violeta</button>
                            <button class="verde col-3" style="background-color: green">Verde</button>
                            <button class="beige col-3" style="background-color: beige;">Beige</button>
                    </div>
                    <div class="labels mt-2">
                        <label>Genero:</label>
                    </div>
                    <div class="f-genero col-12">
                        <input name="genero" type="radio" checked>Masculino
                        <input name="genero" type="radio">Femenino
                    </div>
                    <div class="labels mt-2">
                        <label for="talla">Talla:</label>
                    </div>
                    <div class="talla">
                        <select name="talla" id="talla">
                            <option value="28">28</option>
                            <option value="32">32</option>
                            <option value="34">34</option>
                            <option value="36">36</option>
                        </select>
                    </div>
                    <div class="labels mt-2">
                        <label for="f-genero">Rango de precio:</label>
                    </div>
                    <div class="f-precio">
                        <input type="range" name="preciop" id="preciop" min="40" max="300" step="10" value="200" />
                        <output class="price-output" for="preciop"></output>
                    </div>
                </div>
            </div>

        </div>

        <!--PRODUCTOS ENCONTRADOS-->

        <div class="conatiner-fluid col-9  mt-3 mb-3">
            <div class="col-12 card fs-5 p-1" style="border: 2px solid black;">
                Productos encontrados 50
            </div>
            <div class="container-fluid col-12 m-0 p-0 row">
                <div class="col-lg-3 col-md-4 col-sm-6 p-2">
                    <div class="card">
                        <img src="./views/plantilla/assets/img/pants11.jpg" class="card-img-top" alt="imagen"
                            style="height: 300px; max-height: 250px;">
                        <div class="card-body">
                            <h5 class="card-title" style="height: 75px; font-size: 15px;">L307-2 | Jeans outfit men,
                                Street style hip hop, Baggy jeans</h5>
                            <div class="col-12">
                                <p class="text-end" style="font-weight: 700;">S/120.00</p>
                            </div>
                            <a href="<?php echo BASE_URL?>/detalle" class="btn btn-dark col-12">Ve detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 p-2">
                    <div class="card">
                        <img src="./views/plantilla/assets/img/pants10.webp" class="card-img-top" alt="imagen"
                            style="height: 300px; max-height: 250px;">
                        <div class="card-body">
                            <h5 class="card-title" style="height: 75px; font-size: 15px;">L307-2 | Jeans outfit men,
                                Street style hip hop, Baggy jeans</h5>
                            <div class="col-12">
                                <p class="text-end" style="font-weight: 700;">S/120.00</p>
                            </div>
                            <a href="./detalle.html" class="btn btn-dark col-12">Ve detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 p-2">
                    <div class="card">
                        <img src="./views/plantilla/assets/img/pants15.jpg" class="card-img-top" alt="imagen"
                            style="height: 300px; max-height: 250px;">
                        <div class="card-body">
                            <h5 class="card-title" style="height: 75px; font-size: 15px;">L307-2 | Jeans outfit men,
                                Street style hip hop, Baggy jeans</h5>
                            <div class="col-12">
                                <p class="text-end" style="font-weight: 700;">S/120.00</p>
                            </div>
                            <a href="./detalle.html" class="btn btn-dark col-12">Ve detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 p-2">
                    <div class="card">
                        <img src="./views/plantilla/assets/img/pants16.jpg" class="card-img-top" alt="imagen"
                            style="height: 300px; max-height: 250px;">
                        <div class="card-body">
                            <h5 class="card-title" style="height: 75px; font-size: 15px;">L307-2 | Jeans outfit men,
                                Street style hip hop, Baggy jeans</h5>
                            <div class="col-12">
                                <p class="text-end" style="font-weight: 700;">S/120.00</p>
                            </div>
                            <a href="./detalle.html" class="btn btn-dark col-12">Ve detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 p-2">
                    <div class="card">
                        <img src="./views/plantilla/assets/img/pants9.webp" class="card-img-top" alt="imagen"
                            style="height: 300px; max-height: 250px;">
                        <div class="card-body">
                            <h5 class="card-title" style="height: 75px; font-size: 15px;">L307-2 | Jeans outfit men,
                                Street style hip hop, Baggy jeans</h5>
                            <div class="col-12">
                                <p class="text-end" style="font-weight: 700;">S/120.00</p>
                            </div>
                            <a href="./detalle.html" class="btn btn-dark col-12">Ve detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 p-2">
                    <div class="card">
                        <img src="./views/plantilla/assets/img/pants8.jpg" class="card-img-top" alt="imagen"
                            style="height: 300px; max-height: 250px;">
                        <div class="card-body">
                            <h5 class="card-title" style="height: 75px; font-size: 15px;">L307-2 | Jeans outfit men,
                                Street style hip hop, Baggy jeans</h5>
                            <div class="col-12">
                                <p class="text-end" style="font-weight: 700;">S/120.00</p>
                            </div>
                            <a href="./detalle.html" class="btn btn-dark col-12">Ve detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 p-2">
                    <div class="card">
                        <img src="./views/plantilla/assets/img/pants7.webp" class="card-img-top" alt="imagen"
                            style="height: 300px; max-height: 250px;">
                        <div class="card-body">
                            <h5 class="card-title" style="height: 75px; font-size: 15px;">L307-2 | Jeans outfit men,
                                Street style hip hop, Baggy jeans</h5>
                            <div class="col-12">
                                <p class="text-end" style="font-weight: 700;">S/120.00</p>
                            </div>
                            <a href="./detalle.html" class="btn btn-dark col-12">Ve detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 p-2">
                    <div class="card">
                        <img src="./views/plantilla/assets/img/pants6.webp" class="card-img-top" alt="imagen"
                            style="height: 300px; max-height: 250px;">
                        <div class="card-body">
                            <h5 class="card-title" style="height: 75px; font-size: 15px;">L307-2 | Jeans outfit men,
                                Street style hip hop, Baggy jeans</h5>
                            <div class="col-12">
                                <p class="text-end" style="font-weight: 700;">S/120.00</p>
                            </div>
                            <a href="./detalle.html" class="btn btn-dark col-12">Ve detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 p-2">
                    <div class="card">
                        <img src="./views/plantilla/assets/img/pants5.webp" class="card-img-top" alt="imagen"
                            style="height: 300px; max-height: 250px;">
                        <div class="card-body">
                            <h5 class="card-title" style="height: 75px; font-size: 15px;">L307-2 | Jeans outfit men,
                                Street style hip hop, Baggy jeans</h5>
                            <div class="col-12">
                                <p class="text-end" style="font-weight: 700;">S/120.00</p>
                            </div>
                            <a href="./detalle.html" class="btn btn-dark col-12">Ve detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 p-2">
                    <div class="card">
                        <img src="./views/plantilla/assets/img/pants4.jpg" class="card-img-top" alt="imagen"
                            style="height: 300px; max-height: 250px;">
                        <div class="card-body">
                            <h5 class="card-title" style="height: 75px; font-size: 15px;">L307-2 | Jeans outfit men,
                                Street style hip hop, Baggy jeans</h5>
                            <div class="col-12">
                                <p class="text-end" style="font-weight: 700;">S/120.00</p>
                            </div>
                            <a href="./detalle.html" class="btn btn-dark col-12">Ve detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 p-2">
                    <div class="card">
                        <img src="./views/plantilla/assets/img/pants3.jpg" class="card-img-top" alt="imagen"
                            style="height: 300px; max-height: 250px;">
                        <div class="card-body">
                            <h5 class="card-title" style="height: 75px; font-size: 15px;">L307-2 | Jeans outfit men,
                                Street style hip hop, Baggy jeans</h5>
                            <div class="col-12">
                                <p class="text-end" style="font-weight: 700;">S/120.00</p>
                            </div>
                            <a href="./detalle.html" class="btn btn-dark col-12">Ve detalles</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 p-2">
                    <div class="card">
                        <img src="./views/plantilla/assets/img/pants2.jpg" class="card-img-top" alt="imagen"
                            style="height: 300px; max-height: 250px;">
                        <div class="card-body">
                            <h5 class="card-title" style="height: 75px; font-size: 15px;">L307-2 | Jeans outfit men,
                                Street style hip hop, Baggy jeans</h5>
                            <div class="col-12">
                                <p class="text-end" style="font-weight: 700;">S/120.00</p>
                            </div>
                            <a href="./detalle.html" class="btn btn-dark col-12">Ve detalles</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container d-flex justify-content-center">
                <nav aria-label="">
                    <ul class="pagination">
                      <li class="page-item disabled">
                        <span class="page-link">Anterior</span>
                      </li>
                      <li class="page-item active" aria-current="page">
                        <span class="page-link" style="background: red; border: 1px solid red;">1</span>
                      </li>
                      <li class="page-item"><a class="page-link" href="#" style="color: black;">2</a></li>
                      <li class="page-item"><a class="page-link" href="#" style="color: black;">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#" style="color: black;">Siguiente</a>
                      </li>
                    </ul>
                  </nav>
            </div>
        </div>


