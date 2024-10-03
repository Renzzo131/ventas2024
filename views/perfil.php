
<div class="container-fluid">
        <h2 class="col-12" style="background-color: red; color: black;">Bienvenido Renzo Gamboa</h2>
        <div class="container-fluid row mt-3 mb-3 m-0" style="display: flex; justify-content: space-around;">
            <div class="col-2 card d-flex justify-content-center align-items-center" style="background-color: gray;">
                <img src="../assets/img/usuario.png" alt="" width="130" height="130">
                <ul class="col-12" style="padding: 0; margin: 0;">
                    <li class="navp mb-3 m-0"><a href="#">Datos</a></li>
                    <li class="navp mb-3 m-0"><a href="#">Historial de compras</a></li>
                    <li class="navp mb-3 m-0"><a href="#">Favoritos</a></li>
                    <li class="navp mb-3 m-0"><a href="#">Quitados del carrito</a></li>
                    <li class="navp mb-3 m-0"><a href="#">Mi contraseña</a></li>
                    <li class="navp mb-3 m-0"><a href="./login.html">Cerrar sesión</a></li>
                </ul>
            </div>
            <form action="" class="col-8 row">
                <div class="col-6 " style="background: rgb(77, 77, 77);">
                    <div class="col-12  mb-3 mt-3">
                        <h4  style="background: red; color: black;">Datos personales</h4>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="nombre" class="form-label">Nombres(*)</label>
                        <input id="nombre" type="text" name="nombre" class="form-control" required placeholder="Nombres"
                            value="Renzo Eduardo">
                    </div>
                    <div class="col-12  mb-3">
                        <label for="apellido" class="form-label">Apellidos(*)</label>
                        <input id="apellido" type="text" name="apellidos" class="form-control" required
                            placeholder="Apellido Paterno" value="Gamboa Sulca">
                    </div>
                    <div class="col-12  mb-3">
                        <label for="correo" class="form-label">Correo electrónico(*)</label>
                        <input id="correo" type="text" name="correo" class="form-control" required
                            placeholder="Correo electrónico" value="renzo@cmail.ex">
                    </div>
                    <div class="col-12  mb-3">
                        <label for="sexo" class="form-label">Sexo(*)</label>
                        <input id="sexo" type="text" name="sexo" class="form-control" required placeholder="Sexo"
                            value="M">
                    </div>
                    <div class="col-12 mb-3">
                        <label for="sexo" class="form-label">Fecha de nacimiento(*)</label>
                        <input type="date" name="fecha" class="form-control" required placeholder="fecha"
                            value="2002-02-19">
                    </div>
                </div>
                <div class="col-6" style="background: rgb(77, 77, 77);">
                    <div class="col-12  mb-3 mt-3">
                        <h4 style="background: red; color: black;">Donde ubicarte</h4>
                    </div>
                    <div class="col-12  mb-3">
                        <label for="region" class="form-label">Región</label>
                        <input id="region" type="text" name="region" class="form-control" required placeholder="Region"
                            value="Ayacucho">
                    </div>
                    <div class="col-12  mb-3">
                        <label for="ciudad" class="form-label">Ciudad</label>
                        <input id="ciudad" type="text" name="ciudad" class="form-control" required placeholder="Ciudad"
                            value="Huanta">
                    </div>
                    <div class="col-12  mb-3">
                        <label for="codigo_postal" class="form-label">Codigo Postal</label>
                        <input id="codigo_postal" type="number" name="codigo_postal" class="form-control" required
                            placeholder="Codigo Postal" value="05121">
                    </div>
                    <div class="col-12  mb-3">
                        <label for="direccion" class="form-label">Dirección</label>
                        <input id="direccion" type="text" name="direccion" class="form-control" required
                            placeholder="Direccion" value="Jr.Arica 76579">
                    </div>
                    <div class="col-12">
                        <button type="submit" name="actualizar" class="btn" style="background-color: red; color: white;">Actualizar</button>
                    </div>
                </div>
            </form>
            <div class="col-2 card" style="background-color: gray;">

            </div>
        </div>
    </div>
