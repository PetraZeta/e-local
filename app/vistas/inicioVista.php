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

<body>
        <div class="container-fluid">
                <div class="row vh-100">


                        <!-- IZQUIERDA -->
                        <div class="section col-12 col-md-4" id="izquierda">
                                <div class="container ">

                                        <!-- MENU -->

                                        <div class="row mt-2 ">
                                                <nav class="menu ">
                                                        <!--    BOTONES -->
                                                        <div class="row align-items-center my-5">
                                                                <div class="col ">
                                                                        <a href="<?php echo BASE_URL; ?>Inicio/index" title="Inicio">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="white" class="bi bi-box" viewBox="0 0 16 16">
                                                                                        <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5 8 5.961 14.154 3.5 8.186 1.113zM15 4.239l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z" />
                                                                                </svg>
                                                                        </a>
                                                                </div>
                                                                <div class="col">
                                                                        <h3 class="text-center m-auto col">
                                                                                <a href="<?php echo BASE_URL; ?>Admon/caratula" title="Login Tienda"><i class="fas fa-store"></i></a>
                                                                        </h3>
                                                                </div>
                                                                <div class="col">

                                                                        <h3 class="text-end m-3"><a href="<?php echo BASE_URL; ?>Login/caratula" title="Login"> <i class="fas fa-sign-in-alt "></i></a></h3>
                                                                </div>



                                                        </div>
                                                        <!-- FIN BOTONES -->
                                                        <ul class="nav flex-column ">
                                                                <li class="nav-item dropdown">
                                                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                TIENDAS
                                                                        </a>
                                                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                                                <li><a class="dropdown-item" href="#">Tienda1</a></li>
                                                                                <li><a class="dropdown-item" href="#">Tienda2</a></li>

                                                                                <li><a class="dropdown-item" href="#">Tienda3</a></li>


                                                                        </ul>
                                                                </li>
                                                                <li class="nav-item">
                                                                        <a class="nav-link" href="#">
                                                                                MARCAS
                                                                        </a>

                                                                </li>
                                                                <li class="nav-item">
                                                                        <a class="nav-link" href=" <?php echo BASE_URL; ?>Catalogo/index">
                                                                                CATÁLOGO
                                                                        </a>
                                                                </li>


                                                        </ul>
                                                </nav>
                                        </div>
                                        <!--FIN MENU -->
                                        <!-- BUSCADOR -->
                                        <div class="row align-items-end">
                                                <div class="col-12 p-3 m-3">
                                                        <form class="container-fluid">
                                                                <div class="input-group p-3 ">
                                                                        <span class="input-group-text"><i class="fas fa-search"></i></span>
                                                                        <input type="text" class="form-control" placeholder="¿Que quieres buscar?">
                                                                </div>
                                                        </form>

                                                </div>


                                        </div>
                                        <!-- FIN BUSCADOR -->

                                </div>
                        </div>
                        <!--FIN IZQUIERDA -->

                        <!-- DERECHA -->
                        <div class="section right col-12 col-md-8" id="derecha">
                                <div class="col-md-8 text-center " id="logo" style=" position: absolute;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="350" height="350" fill="white" class="bi bi-box img-fluid" viewBox="0 0 16 16">
                                                <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5 8 5.961 14.154 3.5 8.186 1.113zM15 4.239l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z" />
                                        </svg>

                                        <h1 class="fw-bold text-center ">e-local</h1>
                                        <h3>Portal de tiendas de tu ciudad</h3>
                                </div>
                                <div class="col-md-8 text-center">

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
                        <!-- FIN DERECHA -->
                </div>
        </div>

        <script src="https://kit.fontawesome.com/8682e22814.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

</body>

</html>