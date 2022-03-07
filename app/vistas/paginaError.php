<?php include_once("plantilla/encabezado.php"); ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Local. Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php print BASE_URL; ?>public/css/index.css" rel="stylesheet">
    <link href="<?php print BASE_URL; ?>public/css/inicio.css" rel="stylesheet">



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</head>

<body style="background-image: linear-gradient(35deg, #66edff,#da97ff );">


    <div class="section  col  text-center m-auto">
        <div class="col text-center " id="logo" style=" position: absolute; top:50px; right:0 ;left:0; bottom:0; margin:auto">
            <svg xmlns="http://www.w3.org/2000/svg" width="350" height="350" fill="white" class="bi bi-box img-fluid" viewBox="0 0 16 16">
                <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5 8 5.961 14.154 3.5 8.186 1.113zM15 4.239l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z" />
            </svg>
            <h1>Error 404</h1>
            <h3>Upss! Ha ocurrido un error.</h3>
            <p> La página no existe o hay algun error de configuración.</p>
            <a class="linkinfo" href="<?php echo BASE_URL; ?>Inicio/index">Volver</a> 
        </div>
        <div class="col text-center">

            <!-- ANIMACION BURBUJAS-->
            <div class="burbujas">
                <div class="burbuja"></div>
                <div class="burbuja"></div>
                <div class="burbuja"></div>
                <div class="burbuja"></div>
                <div class="burbuja"></div>
            </div>
        </div>
    </div>
    <!--     <g id="VolverBoton">
        <a href="">
            <g id="Rectangle 2" filter="">
                <rect x="554" y="599" width="295.242" height="72" rx="25" fill="#A3FFFF" />
            </g>
        </a> -->