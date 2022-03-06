<?php include_once("plantilla/encabezado.php"); ?>
<div class="col col-xl-10 vh-100">
    <div class="card" style="border-radius: 1rem 1rem;">
        <div class="row g-0 ">
            <div class="col-md-6 col-lg-5 d-none  d-md-block">
                <img src="<?php print BASE_URL; ?>public/img/modelo3.jpg" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem; " />
            </div>
            <div class="col-md-6 col-lg-7 d-flex  align-items-center">
                <div class="card-body px-4 p-lg-5 text-black">

                    <!--      LOGIN      -->
                    <h1 class="fw-bold text-center m-2">Administración de Tienda</h1>
                    <div class="row">
                        <div class="pb-lg-2 my-2">
                            <p class=" small text-muted pb-lg-2 " style="color: #393f81;">Introduce tu correo y la contraseña asignada para administrar tu tienda</p>
                        </div>
                        <?php include_once("plantilla/errores.php"); ?>
                        <form action="<?php print BASE_URL; ?>admon/verifica/" method="POST">

                            <div class="row my-3">

                                <div class="col-12 ">
                                    <label for="usuario"></label>
                                    <input type="text" class="form-control" id="usuario" placeholder="Escriba su nombre de usuario" name="usuario" value='<?php isset($datos["data"]["usuario"]) ? print $datos["data"]["usuario"] : ""; ?>' required>
                                </div>

                                <div class="col-12">
                                    <label for="clave"></label>
                                    <input type="password" class="form-control" id="clave" placeholder="Contraseña" name="clave" value='<?php isset($datos["data"]["clave"]) ? print $datos["data"]["clave"] : ""; ?>' required>
                                </div>
                                <div class="form-group pt-1 my-3 mx-2 ">
                                    <input type="submit" class="btn btn-dark btn-lg btn-block" value="Entrar" name="login"><br>
                                </div>
                        </form>
                        <div class="row">
                            <div class="pb-lg-2 my-2">
                                <p class=" small text-muted pb-lg-2 " style="color: #393f81;">¿No eres administrador? <a href="<?php print BASE_URL; ?>Inicio/index/" style="color: #393f81;">Salir</a></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div> <!-- FIN ROW -->



    </div>
    <?php include_once("plantilla/pie.php"); ?>