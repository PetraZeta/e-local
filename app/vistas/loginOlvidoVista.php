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
                            <!--      LOGIN OLVIDO     -->
                            <h1 class="fw-bold text-center p-2 m-2"><?php print $datos["subtitulo"]; ?></h1>
                            <?php include_once("plantilla/errores.php"); ?>
                            <form action="<?php print RUTA; ?>login/olvido/" method="POST">

                                <div class="row py-3">
                                    <div class="col-10 m-auto pb-3">
                                        <label class="my-3 mx-auto" for="email">Ingresa tu e-mail y te enviaremos un correo con la instrucciones para cambiar tu contraseña:</label>
                                        <input type="text" class="form-control" id="e-mail" placeholder="E-mail" name="email" required>
                                    </div>
                                </div>
                                <div class="form-group pt-1 my-3 mx-2 ">
                                    <input type="submit" class="btn btn-dark btn-lg btn-block my-3" value="Entrar" name="login"><br>
                                    <a href="<?php print RUTA; ?>" class="text-muted pb-lg-2 p-2">Volver</a>
                                </div>
                            </form>
                            <!-- <p>Se ha enviado un correo con el enlace para cambiar la contraseña.<br> Si no lo ves revisa tu bandeja de span.</p> -->
                        </div>
                    </div> <!-- FIN ROW -->
                </div>

            </div>
        </div>

    </div>
</div>
</div> <!-- FIN ROW -->



</div>

<?php include_once("plantilla/pie.php"); ?>