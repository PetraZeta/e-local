<?php include_once("plantilla/encabezado.php"); ?>
<div class="col col-xl-10 vh-100">
    <div class="card" style="border-radius: 1rem 1rem;">
        <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none  d-md-block">
                <img src="<?php print RUTA; ?>public/img/modelo3.jpg" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex  align-items-center">
                <div class="card-body px-4 p-lg-5 text-black">
                    <div class="col-md-6 col-lg-5 d-none  d-md-block">
                        <img src="imagen/modelo3.jpg" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                    </div>
                    <div class="col-md-6 col-lg-7 d-flex  align-items-center">
                        <div class="card-body p-4 p-lg-5 text-black">
                            <!--      LOGIN      -->
                            <h1 class="fw-bold text-center p-2 m-2">Cambia tu clave de acceso</h1>
                            <?php include_once("plantilla/errores.php"); ?>
                            <form action="<?php print RUTA; ?>login/cambiaClave/" method="POST">

                                <div class="row py-3">

                                    <div class="col-12 col-md-6 pb-3">
                                        <label for="clave1"></label>
                                        <input type="password" class="form-control" id="clave1" placeholder="Nueva clave de acceso" name="clave1" required>
                                    </div>
                                    <!-- campo oculto para enviar el id-->
                                    <input type="hidden" name="id" value="<?php print $datos['data']; ?>" />
                                    <div class="col-12 col-md-6">
                                        <label for="clave2"></label>
                                        <input type="password" class="form-control" id="clave2" placeholder="Confirma la nueva clave" name="clave2" required>
                                    </div>
                                    <div class="form-group pt-1 my-3 mx-2 ">
                                        <input type="submit" class="btn btn-dark btn-lg btn-block" value="Enviar"><br>
                                        <div class="pb-lg-2">
                                            <p class=" pb-lg-2 py-5" style="color: #393f81;"><a href="<?php print RUTA . 'login/'; ?>" style="color: #393f81;">Volver</a></p>

                                        </div>
                                    </div>

                            </form>
                            <div class="row">

                            </div>
                        </div>
                    </div> <!-- FIN ROW -->
                </div>

            </div>
        </div>
    </div> <!-- FIN ROW -->



</div>

<?php include_once("plantilla/pie.php"); ?>