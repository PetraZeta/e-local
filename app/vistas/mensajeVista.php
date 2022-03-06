<?php include_once("plantilla/encabezado.php"); ?>
<!-- //vista generica que mostrara los mensajes varios para informar de los preocesos e interactuar con el usuario
// Toma un texto , un color segun las clases de bootstrap... y demas atributos del array datos definido en el controlador -->
<div class="col col-xl-10 ">
    <div class="card" style="border-radius: 1rem 1rem;">
        <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none  d-md-block">
                <img src="<?php print BASE_URL; ?>public/img/modelo3.jpg" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex  align-items-center">
                <div class="card-body px-4 p-lg-5 text-black">
                    <div class="col-md-6 col-lg-5 d-none  d-md-block">
                        <img src="imagen/modelo3.jpg" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                    </div>
                    <div class="col-md-6 col-lg-7 d-flex  align-items-center">
                        <div class="card-body p-4 p-lg-5 text-black">
                            <?php
                            print "<h2 class='text-center'>" . $datos["subtitulo"] . "</h2>";
                            print "<div class='alert " . $datos["color"] . " mt-3'>";
                            print "<h5>" . $datos["texto"] . "</h5>";
                            print "</div>";
                            print "<a href='" . BASE_URL . $datos["url"] . "' class='btn " . $datos["colorBoton"] . "' />";
                            print $datos["textoBoton"] . "</a>";
                            ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> <!-- FIN ROW -->



</div>
<?php include_once("plantilla/pie.php"); ?>