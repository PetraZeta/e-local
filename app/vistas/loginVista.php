<?php include_once("plantilla/encabezado.php"); ?>

<div class="col col-xl-10 vh-100 ">
    <div class="card" style="border-radius: 1rem 1rem;">
        <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none  d-md-block">
                <img src="<?php print BASE_URL; ?>public/img/modelo3.jpg" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex  align-items-center">
                <div class="card-body px-4 p-lg-5 text-black">

                    <!--      LOGIN      -->
                    <h1 class="fw-bold text-center p-2 m-2">LOGIN</h1>

                    <?php include_once("plantilla/errores.php"); ?>

                    <form action="<?php print BASE_URL; ?>login/verifica/" method="POST">

                        <div class="row py-3">
                            <div class="col-12 col-md-6 pb-3">
                                <label for="usuario"></label>
                                <input type="text" class="form-control" id="usuario" placeholder="Correo electrónico" name="usuario" value='<?php isset($datos["data"]["usuario"]) ? print $datos["data"]["usuario"] : ""; ?>' required>
                            </div>

                            <div class="col-12 col-md-6">
                                <label for="clave"></label>
                                <input type="password" class="form-control" id="clave" placeholder="Contraseña" name="clave" value='<?php isset($datos["data"]["clave"]) ? print $datos["data"]["clave"] : ""; ?>' required>
                            </div>
                            <div class="form-group pt-1 my-2 mx-2 ">
                                <input type="submit" class="btn btn-dark btn-lg btn-block" value="Entrar" name="login"><br>
                                <div class="pb-lg-2">
                                    <input type="checkbox" name="recordar" <?php
                                                                            if (isset($datos['data']['recordar'])) {
                                                                                if ($datos['data']['recordar'] == "on") print "checked";
                                                                            }
                                                                            ?>>
                                    <label for="recordar" class="small text-muted py-2">Recordar</label>
                                </div>
                            </div>

                    </form>
                    <div class="row">
                        <div class="pb-lg-2 my-2">

                            <a class="small text-muted my-2" href="<?php print BASE_URL; ?>login/registro/">Darse de alta </a><br>
                            <a class="small text-muted my-3" href="<?php print BASE_URL; ?>login/olvido/">¿Has olvidado tu contraseña?</a>
                            <p class=" small text-muted pb-lg-2 py-5" style="color: #393f81;">No quieres registrarte? <a href="<?php print BASE_URL; ?>Inicio/index/" style="color: #393f81;">Salir</a></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> <!-- FIN ROW -->



</div>

<?php include_once("plantilla/pie.php"); ?>