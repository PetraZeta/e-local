<?php include_once("plantilla/encabezado.php"); ?>
<!-- REGISTRO -->
<div class="col col-xl-10 vh-100">
    <div class="card" style="border-radius: 1rem 1rem;">
        <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none  d-md-block">
                <img src="<?php print BASE_URL; ?>public/img/modelo3.jpg" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex  align-items-center">
                <div class="card-body px-4 p-lg-5 text-black">
                    <h1 class="fw-bold text-center py-2">REGISTRO</h1>
                    <?php include_once("plantilla/errores.php"); ?>
                    <form action="<?php print BASE_URL; ?>login/registro/" method="POST">
                        <div class="row py-3">
                            <div class="col-12 col-md-6 pb-3 ">
                                <input type="text" class="form-control" id="nombre" placeholder="Nombre completo" name="nombre" value='<?php isset($datos["data"]["nombre"]) ? print $datos["data"]["nombre"] : ""; ?>' required>
                            </div>

                            <div class="col-12 col-md-6 ">
                                <input type="email" class="form-control" id="e-mail" placeholder="E-mail" name="email" value='<?php isset($datos["data"]["email"]) ? print $datos["data"]["email"] : ""; ?>' required>
                            </div>

                            <div class="col-12 col-md-6 ">
                                <input type="password" class="form-control" id="clave" placeholder="Clave acceso" name="clave1" value='<?php isset($datos["data"]["clave1"]) ? print $datos["data"]["clave1"] : ""; ?>' required>
                            </div>

                            <div class="col-12 col-md-6 ">
                                <input type="password" class="form-control" id="clave2" placeholder="Confirma clave" name="clave2" value='<?php isset($datos["data"]["clave2"]) ? print $datos["data"]["clave2"] : ""; ?>' required>
                            </div>


                        </div>
                        <!--     <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" id="myCheck" name="novedades">
                <label class="form-check-label" for="myCheck">¿Deseas que te enviemos novedades via e-mail?</label>

            </div> -->

                        <hr class="my-3">
                        <p class="mb-2 pb-lg-2 text-muted">Completar solo si deseas recibir tu compra a domicilio</p>
                        <div class="col-12 mb-2 col-md-12 ">
                            <input type="text" class="form-control" id="direccion" placeholder="Dirección completa" name="direccion" value='<?php isset($datos["data"]["direccion"]) ? print $datos["data"]["direccion"] : ""; ?>'>
                        </div>
                        <div class="pt-1 my-3 ">
                            <input class="btn btn-dark btn-lg btn-block" type="submit" value="Registro">
                        </div>
                        <p class=" pb-lg-2" style="color: #393f81;">No quieres registrarte? <a href="<?php print BASE_URL; ?>login/" style="color: #393f81;">Salir</a></p>
                        <p>
                            <a href="#!" class="small text-muted ">Terminos de uso.</a>
                            <br>
                            <a href="#!" class="small text-muted ">Política de privacidad.</a>

                        </p>
                    </form>
                </div>

            </div>
        </div>
    </div> <!-- FIN ROW -->



</div>

<!--FIN REGISTRo -->
<?php include_once("plantilla/pie.php"); ?>