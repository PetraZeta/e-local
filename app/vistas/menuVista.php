       <!-- IZQUIERDA -->
       <div class="section col-12 d-block col-md-4" id="izquierda">
           <div class="container ">

               <!-- MENU -->

               <div class="row mt-2 ">
                   <nav class="menu ">
                       <!--    BOTONES -->
                       <div class="row align-items-center my-5">
                           <!--     LOGO -->
                           <div class="col ">
                               <a href="<?php echo BASE_URL; ?>Inicio/index" title="Inicio">
                                   <svg xmlns=" http://www.w3.org/2000/svg" width="40" height="40" fill="white" class="bi bi-box" viewBox="0 0 16 16">
                                       <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5 8 5.961 14.154 3.5 8.186 1.113zM15 4.239l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z" />
                                   </svg>
                               </a>
                           </div>
                           <!--    CARRITO -->




                           <button class="navbar-toggler col" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                               <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-basket" viewBox="0 0 16 16">
                                   <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z" />
                               </svg>

                           </button>
                           <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="background-color: #a3ffff;">
                               <div class="offcanvas-header">
                                   <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Carrito</h5>
                                   <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                               </div>
                               <div class="offcanvas-body">
                                   <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                       <li class="submenu">

                                           <div id="carrito">

                                               <table id="lista-carrito" class="table table-ligth table-hover">
                                                   <thead>
                                                       <tr>
                                                           <th>Imagen</th>
                                                           <th>Nombre</th>
                                                           <th>Cantidad</th>
                                                           <th>Precio</th>

                                                           <th></th>
                                                       </tr>
                                                   </thead>
                                                   <tbody>
                                                       <td>fdgfdggfg</td>
                                                       <td>fdgfdggfgcece</td>
                                                       <td>2</td>
                                                       <td>23.50</td>

                                                   </tbody>
                                               </table>
                                               <button type="button" class="btn btn-success px-5 m-3">Comprar</button>
                                               <button type="button" id="vaciar-carrito" class="btn btn-danger">Vaciar Carrito</button>

                                           </div>
                                       </li>

                                   </ul>

                               </div>
                           </div>

                           <!--       LOGIN ADMIN -->
                           <div class="col">
                               <h2 class="text-center m-auto col">
                                   <a href="<?php echo BASE_URL; ?>Admon/caratula" title="Login Tienda"><i class="fas fa-store"></i></a>
                               </h2>
                           </div>
                           <!--    LOGIN USUARIO -->
                           <div class="col">

                               <h2 class="text-end m-3"><a href="<?php echo BASE_URL; ?>Login/caratula" title="Login"> <i class="fas fa-sign-in-alt "></i></a></h2>
                           </div>



                       </div>
                       <!-- FIN BOTONES -->
                       <ul class="nav flex-column">
                           <!--     <li class="nav-item d-inline-flex justify-content-between">
                               <a>
                                   <h4>MUJER</h4>
                               </a>
                               <a>
                                   <h4>HOMBRE</h4>
                               </a>
                               <a>
                                   <h4>UNISEX</h4>
                               </a>
                           </li> -->
                           <li class="nav-item">
                               <a class="nav-link" href="#">
                                   <h2>ROPA</h2>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a class="nav-link" href="#">
                                   <h2>ZAPATOS</h2>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a class="nav-link" href="#">
                                   <h2>COMPLEMENTOS</h2>
                               </a>
                           </li>
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